<?php

namespace Webkul\Installer\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Webkul\Installer\Http\Helpers\DatabaseManager;
use Webkul\Installer\Http\Helpers\EnvironmentManager;
use Webkul\Installer\Http\Helpers\ServerRequirements;

class InstallerController extends Controller
{
    const minPhpVersion = '8.1.0';
    public function __construct(
        protected ServerRequirements $serverRequirements,
        protected EnvironmentManager $environmentManager,
        protected DatabaseManager $databaseManager
    )
    {
    }

    /**
     * Installer View Root Page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $phpVersion = $this->serverRequirements->checkPHPversion(self::minPhpVersion);

        $requirements = $this->serverRequirements->validate();

        return view('installer::installer.installer', compact('requirements', 'phpVersion'));
    }

    /**
     * ENV File Setup
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function envFileSetup(Request $request): JsonResponse
    {
        $message = $this->environmentManager->generateEnv($request);

        return new JsonResponse([
            'data' => $message,
        ]);
    }

    public function runMigration()
    {
        $migration = $this->databaseManager->migration();

        return $migration;
    }

    /**
     * Admin Configuration Setup
     *
     * @return void
     */
    public function adminConfigSetup()
    {
        $admin = DB::table('admins')->find(1);

        $password = password_hash(request()->input('password'), PASSWORD_BCRYPT, ['cost' => 10]);

        $data = [
            'name'     => request()->input('admin'),
            'email'    => request()->input('email'),
            'password' => $password,
            'role_id'  => 1,
            'status'   => 1,
        ];

        try {
            if ($admin) {
                DB::table('admins')->where('id', 1)->update($data);
            } else {
                DB::table('admins')->insert($data);
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * SMTP connection setup for Mail
     *
     * @return
     */
    public function smtpConfigSetup()
    {
        $this->environmentManager->setEnvConfiguration(request()->input());

        $filePath = storage_path('installed');
        
        File::put($filePath, 'Your Bagisto App is Successfully Installed');

        return $filePath;
    }
}