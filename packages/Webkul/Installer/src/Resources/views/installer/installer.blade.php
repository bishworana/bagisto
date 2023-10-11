<!DOCTYPE html>
<html>
    <head>
        <title>@lang('Bagisto Installer')</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{ url()->to('/') }}">

        @stack('meta')

        @bagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'], 'installer')

        {{-- <link 
            type="image/x-icon"
            href="{{ Storage::url($favicon) }}" 
            rel="shortcut icon"
            sizes="16x16"
        > --}}

        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
            rel="stylesheet"
        />

        <link 
            type="image/x-icon"
            href="{{ asset('images/logo.svg') }}" 
            rel="shortcut icon"
            sizes="16x16"
        />
        
        @stack('styles')
    </head>

    <body>
            {{-- Flash Message Blade Component --}}
            {{-- <x-admin::flash-group /> --}}
            <div id="app" class="h-full">
                <div class="container">
                    <div class="flex [&amp;>*]:w-[50%] justify-center items-center">
                        <v-server-requirements></v-server-requirements>
                    </div>
                </div>
            </div>

            @pushOnce('scripts')
                <script type="text/x-template" id="v-server-requirements-template">
                    <!-- Left Side Welcome to Installation -->
                    <div class="flex flex-col justify-center">
                        <div class="grid items-end max-w-[362px] m-auto h-[100vh]">
                            <div class="grid gap-[16px]">
                                <img
                                    src="{{ asset('images/bagisto-logo.svg') }}"
                                    alt="Bagisto Logo"
                                >

                                <div class="grid gap-[6px]">
                                    <p class="text-gray-800 text-[20px] font-bold">
                                        @lang('installer::app.installer.installer.welcome')
                                    </p>

                                    <p class="text-gray-600 text-[14px]">
                                        @lang('installer::app.installer.installer.welcome-info')
                                    </p>
                                </div>

                                <p class="text-gray-600 text-[14px]">
                                    @lang('installer::app.installer.installer.info')
                                </p>

                                <div class="grid gap-[12px]">
                                    <div class="flex gap-[4px] text-[14px] font-bold text-gray-600">
                                        <span class="icon-processing text-[20px]"></span>

                                        <p>
                                            @lang('installer::app.installer.installer.server-requirement')
                                        </p>
                                    </div>

                                    <div class="flex gap-[4px] text-[14px] text-gray-600">
                                        <span class="icon-checkbox text-[20px]"></span>

                                        <p>
                                            @lang('installer::app.installer.installer.environment-configuration')
                                        </p>
                                    </div>

                                    <div class="flex gap-[4px] text-[14px] text-gray-600">
                                        <span class="icon-checkbox text-[20px]"></span>

                                        <p>
                                            @lang('installer::app.installer.installer.ready-for-installation')
                                        </p>
                                    </div>

                                    <div class="flex gap-[4px] text-[14px] text-gray-600">
                                        <span class="icon-tick text-[20px] text-green-500"></span>
                                        
                                        <p>
                                            @lang('installer::app.installer.installer.create-administrator')
                                        </p>
                                    </div>

                                    <div class="flex gap-[4px] text-[14px] text-gray-600">
                                        <span class="icon-checkbox text-[20px]"></span>

                                        <p>
                                            @lang('installer::app.installer.installer.email-configuration')
                                        </p>
                                    </div>

                                    <div class="flex gap-[4px] text-[14px] text-gray-600">
                                        <span class="icon-checkbox text-[20px]"></span>
                                        
                                        <p>
                                            @lang('installer::app.installer.installer.installation-completed')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p class="place-self-end w-full text-left mb-[24px]">
                                <a
                                    class="text-blue-500"
                                    href="https://bagisto.com/en/"
                                >
                                    @lang('installer::app.installer.installer.bagisto')
                                </a> 
                                
                                @lang('installer::app.installer.installer.bagisto-info')

                                <a
                                    class="text-blue-500"
                                    href="https://webkul.com/"
                                >
                                    @lang('installer::app.installer.installer.webkul')
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Right Side Components -->
                    <!-- Server Requirements -->
                    <div class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300" v-if="currentStep == 'environment'">
                        <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                            <p class="text-[20px] text-gray-800 font-bold">
                                @lang('installer::app.installer.installer.server-requirement')
                            </p>
                        </div>

                        <div class="flex flex-col gap-[15px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[486px] overflow-y-auto">
                            <div class="flex gap-[4px]">
                                <span class="{{ $phpVersion['supported'] ? 'icon-tick text-[20px] text-green-500' : '' }}"></span>

                                <p class="text-[14px] text-gray-600 font-semibold">
                                    PHP <span class="font-normal">(8.1 or higher)</span>
                                </p>
                            </div>

                            @foreach ($requirements['requirements'] as $requirement)
                                @foreach ($requirement as $key => $item)
                                    <div class="flex gap-[4px]">
                                        <span class="{{ $item ? 'icon-tick text-green-500' : 'icon-cross text-red-500' }} text-[20px]"></span>

                                        <p class="text-[14px] text-gray-600 font-semibold">
                                            {{ $key }}
                                        </p>
                                    </div>    
                                @endforeach
                            @endforeach
                        </div>

                        @php
                            $hasRequirement = false;

                            foreach ($requirements['requirements']['php'] as $value) {
                                if (!$value) {
                                    $hasRequirement = true;
                                    break;
                                }
                            }
                        @endphp

                        <div class="flex px-[16px] py-[10px] justify-end items-center">
                            <div 
                                class="{{ $hasRequirement ? 'opacity-50 cursor-not-allowed' : ''}} px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer {{ $hasRequirement ?: 'hover:opacity-90' }}"
                                @click="FormSubmit"
                            >
                                @lang('installer::app.installer.installer.continue')
                            </div>
                        </div>
                    </div>

                    <!-- Environment Configuration .ENV -->
                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'envSetup'"
                    >
                        <x-installer::form
                            v-slot="{ meta, errors, handleSubmit }"
                            as="div"
                        >
                            <form
                                @submit.prevent="handleSubmit($event, FormSubmit)"
                                enctype="multipart/form-data"
                            >
                                <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                    <p class="text-[20px] text-gray-800 font-bold">
                                        Environment Configuration
                                    </p>
                                </div>

                                <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                    <!-- Application Name -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.installer.application-name')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="app_name"
                                            :value="old('app_name') ?? 'Bagisto'"
                                            rules="required"
                                            :label="trans('installer::app.installer.installer.application-name')"
                                            :placeholder="trans('installer::app.installer.installer.bagisto')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="app_name"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Application Default URL -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.installer.default-url')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="app_url"
                                            value="https://localhost"
                                            rules="required"
                                            :label="trans('installer::app.installer.installer.default-url')"
                                            :placeholder="trans('https://localhost')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="app_url"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Application Default Currency -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.installer.default-currency')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="select"
                                            name="app_currency"
                                            value="USD"
                                            rules="required"
                                            :label="trans('installer::app.installer.installer.default-currency')"
                                        >
                                            <option value="USD" selected>
                                                @lang('installer::app.installer.installer.us-dollar')
                                            </option>

                                            <option value="EUR">
                                                @lang('installer::app.installer.installer.euro')
                                            </option>
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="app_currency"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Application Default Timezone -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.installer.default-timezone')
                                        </x-installer::form.control-group.label>
                                        
                                        @php
                                            date_default_timezone_set('UTC');
                                            $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
                                            $current = date_default_timezone_get();
                                        @endphp

                                        <x-installer::form.control-group.control
                                            type="select"
                                            name="app_timezone"
                                            value="{{ $current }}"
                                            rules="required"
                                            :label="trans('installer::app.installer.installer.default-timezone')"
                                            >
                                            @foreach($tzlist as $key => $value)
                                                <option
                                                    value="{{ $value }}"
                                                    {{ $value === $current ? 'selected' : '' }}
                                                >
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="app_timezone"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Application Default Locale -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.installer.default-locale')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="select"
                                            name="app_locale"
                                            value="en"
                                            rules="required"
                                            :label="trans('installer::app.installer.installer.default-locale')"
                                        >
                                            <option value="ar">
                                                @lang('installer::app.installer.installer.arabic')
                                            </option>

                                            <option value="nl">
                                                @lang('installer::app.installer.installer.dutch')
                                            </option>

                                            <option value="en" selected>
                                                @lang('installer::app.installer.installer.english')
                                            </option>

                                            <option value="fr">
                                                @lang('installer::app.installer.installer.french')
                                            </option>

                                            <option value="es">
                                                @lang('installer::app.installer.installer.espanol')
                                            </option>
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="app_locale"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>
                                </div>
                                
                                <div class="flex px-[16px] py-[10px] justify-between items-center">
                                    <div
                                        class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                                        @click="back"
                                    >
                                        @lang('installer::app.installer.installer.back')
                                    </div>

                                    <button 
                                        type="submit"
                                        class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                    >
                                        @lang('installer::app.installer.installer.continue')
                                    </button>
                                </div>
                                
                            </form>
                        </x-installer::form>
                    </div>

                    <!-- Environment Configuration Database -->
                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'envDatabase'"
                    >
                        <x-installer::form
                            v-slot="{ meta, errors, handleSubmit }"
                            as="div"
                        >
                            <form
                                @submit.prevent="handleSubmit($event, FormSubmit)"
                                enctype="multipart/form-data"
                            >
                                <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                    <p class="text-[20px] text-gray-800 font-bold">
                                        @lang('installer::app.installer.installer.environment-configuration')
                                    </p>
                                </div>
        
                                <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                    <!-- Database Connection-->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.installer.database-connection')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="select"
                                            name="db_connection"
                                            value="mysql"
                                            rules="required"
                                            :label="trans('installer::app.installer.installer.database-connection')"
                                            :placeholder="trans('installer::app.installer.installer.database-connection')"
                                        >
                                            <option
                                                value="mysql"
                                                selected
                                            >
                                                Mysql
                                            </option>

                                            <option value="sqlite">SQlite</option>

                                            <option value="pgsql">pgSQL</option>

                                            <option value="sqlsrv">SQLSRV</option>
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="db_connection"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                     <!-- Database Hostname-->
                                     <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Database Hostname')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="db_hostname"
                                            value="127.0.0.1"
                                            rules="required"
                                            :label="trans('Database Hostname')"
                                            :placeholder="trans('Database Hostname')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="db_hostname"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Database Port-->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Database Port')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="db_port"
                                            value="2525"
                                            rules="required"
                                            :label="trans('Database Port')"
                                            :placeholder="trans('Database Port')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="db_port"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Database name-->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Database Name')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="db_name"
                                            :value="old('db_name')"
                                            rules="required"
                                            :label="trans('Database Name')"
                                            :placeholder="trans('Database Name')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="db_name"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Database Prefix-->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Database Prefix')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="db_prefix"
                                            :value="old('db_prefix')"
                                            :label="trans('Database Prefix')"
                                            :placeholder="trans('Database Prefix')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="db_prefix"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Database Username-->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Database Username')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="db_username"
                                            :value="old('db_username')"
                                            rules="required"
                                            :label="trans('Database Username')"
                                            :placeholder="trans('Database Username')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="db_username"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Database Password-->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Database Password')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="password"
                                            name="db_password"
                                            :value="old('db_password')"
                                            rules="required"
                                            :label="trans('Database Password')"
                                            :placeholder="trans('Database Password')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="db_password"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>
                                </div>

                                <div class="flex px-[16px] py-[10px] justify-between items-center">
                                    <div
                                        class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                                        @click="back"
                                    >
                                        @lang('installer::app.installer.installer.back')
                                    </div>
        
                                    <button
                                        type="submit"
                                        class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                    >
                                        @lang('installer::app.installer.installer.continue')
                                    </button>
                                </div>
                            </form>
                        </x-installer::form>      
                    </div>

                    <!-- Ready For Installation -->
                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'readyForInstallation'"
                    >
                        <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                            <p class="text-[20px] text-gray-800 font-bold">
                                Installation
                            </p>
                        </div>

                        <div class="flex flex-col gap-[15px] justify-center px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                            <div class="flex flex-col gap-[16px]">
                                <p class="text-[18px] text-gray-800 font-semibold">
                                    Bagisto for Installation
                                </p>
    
                                <div class="grid gap-[10px]">
                                    <label class="text-[14px] text-gray-600">
                                        Click the button below to
                                    </label>

                                    <div class="grid gap-[12px]">
                                        <div class="flex gap-[4px] text-[14px] text-gray-600">
                                            <span class="icon-processing text-[20px]"></span>

                                            <p>Create the database table</p>
                                        </div>

                                        <div class="flex gap-[4px] text-[14px] text-gray-600">
                                            <span class="icon-processing text-[20px]"></span>

                                            <p>Populate the database tables</p>
                                        </div>

                                        <div class="flex gap-[4px] text-[14px] text-gray-600">
                                            <span class="icon-processing text-[20px]"></span>

                                            <p>Publishing the vendor files</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex px-[16px] py-[10px] justify-between items-center">
                            <div
                                class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                                @click="back"
                            >
                                @lang('installer::app.installer.installer.back')
                            </div>

                            <div
                                class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                @click="FormSubmit"
                            >
                                @lang('installer::app.installer.installer.start-installation')
                            </div>
                        </div>
                    </div>

                    <!-- Installation Processing -->
                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'installProgress'"
                    >
                        <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                            <p class="text-[20px] text-gray-800 font-bold">
                                @lang('installer::app.installer.installer.installation')
                            </p>
                        </div>

                        <div class="flex flex-col gap-[15px] justify-center px-[30px] py-[16px] h-[484px] overflow-y-auto">
                            <div class="flex flex-col gap-[16px]">
                                <p class="text-[18px] text-gray-800 font-bold">
                                    Installing Bagisto
                                </p>

                                <div class="grid gap-[10px]">
                                    <p class="text-[14px] text-black">
                                        25% Completed
                                    </p>

                                    <div class="grid gap-[12px]">
                                        <progress value="32" max="100"></progress>
                                    </div>

                                    <p class="text-[14px] text-gray-600">
                                        Creating the database tables, this can take a few moments
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- installation Log -->

                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'installationLog'"
                    >
                    </div>

                    <!-- Create Administrator -->
                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'createAdmin'"
                    >
                        <x-installer::form
                            v-slot="{ meta, errors, handleSubmit }"
                            as="div"
                        >
                            <form
                                @submit.prevent="handleSubmit($event, FormSubmit)"
                                enctype="multipart/form-data"
                            >
                                <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                    <p class="text-[20px] text-gray-800 font-bold">
                                        Create Administrator
                                    </p>
                                </div>

                                <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                    <!-- Admin -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Admin')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="admin"
                                            :value="old('admin') ?? 'Admin'"
                                            rules="required"
                                            :label="trans('Admin')"
                                            :placeholder="trans('Bagisto')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="admin"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Email -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Email')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="email"
                                            :value="old('email') ?? 'admin@example.com'"
                                            rules="required"
                                            :label="trans('Email')"
                                            :placeholder="trans('admin@example.com')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="email"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Password -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Password')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="password"
                                            name="password"
                                            :value="old('password') ?? 'admin123'"
                                            rules="required"
                                            :label="trans('Password')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="password"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Confirm Password -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Confirm Password')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="password"
                                            name="confirm_password"
                                            :value="old('confirm_password')"
                                            rules="required|confirmed:@password"
                                            :label="trans('Confirm Password')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="confirm_password"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>
                                </div>
                                
                                <div class="flex px-[16px] py-[10px] justify-end items-center">
                                    <button 
                                        type="submit"
                                        class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                    >
                                        @lang('installer::app.installer.installer.continue')
                                    </button>
                                </div>
                                
                            </form>
                        </x-installer::form>
                    </div>

                    <!-- Email Configuration Form -->
                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'emailConfiguration'"
                    >
                        <x-installer::form
                            v-slot="{ meta, errors, handleSubmit }"
                            as="div"
                        >
                            <form
                                @submit.prevent="handleSubmit($event, FormSubmit)"
                                enctype="multipart/form-data"
                            >
                                <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                    <p class="text-[20px] text-gray-800 font-bold">
                                        Email Configuration
                                    </p>
                                </div>

                                <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                    <!-- Admin -->
                                    <div class="flex gap-[6px]">
                                        <x-installer::form.control-group class="w-full mb-[10px]">
                                            <x-installer::form.control-group.label class="required">
                                                @lang('Outgoing mail server')
                                            </x-installer::form.control-group.label>
    
                                            <x-installer::form.control-group.control
                                                type="text"
                                                name="mail_server"
                                                :value="old('mail_server') ?? 'smpt.mailtrap.io'"
                                                rules="required"
                                                :label="trans('Outgoing mail server')"
                                                :placeholder="trans('smpt.mailtrap.io')"
                                            >
                                            </x-installer::form.control-group.control>
    
                                            <x-installer::form.control-group.error
                                                control-name="mail_server"
                                            >
                                            </x-installer::form.control-group.error>
                                        </x-installer::form.control-group>
    
                                        <!-- Email -->
                                        <x-installer::form.control-group class="w-full mb-[10px]">
                                            <x-installer::form.control-group.label class="required">
                                                @lang('Server port')
                                            </x-installer::form.control-group.label>
    
                                            <x-installer::form.control-group.control
                                                type="number"
                                                name="server_port"
                                                :value="old('server_port') ?? '3306'"
                                                rules="required"
                                                :label="trans('Server port')"
                                                :placeholder="trans('3306')"
                                            >
                                            </x-installer::form.control-group.control>
    
                                            <x-installer::form.control-group.error
                                                control-name="server_port"
                                            >
                                            </x-installer::form.control-group.error>
                                        </x-installer::form.control-group>
                                    </div>

                                    <!-- Password -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Encryption')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="select"
                                            name="encryption"
                                            :value="old('encryption') ?? 'tls'"
                                            rules="required"
                                            :label="trans('Encryption')"
                                        >
                                            <option value="tls" selected>TLS</option>
                                            <option value="ssl">SSL</option>
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="encryption"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Store Email Address -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Store Email Address')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="store_email"
                                            :value="old('store_email')"
                                            rules="required"
                                            :label="trans('Store Email Address')"
                                            placeholder="store@example.com"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="store_email"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Username -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Username')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="username"
                                            :value="old('username')"
                                            rules="required"
                                            :label="trans('Username')"
                                            placeholder="store@example.com"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="username"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Password -->
                                    <x-installer::form.control-group class="mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('Password')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="password"
                                            name="password"
                                            :value="old('password')"
                                            rules="required"
                                            :label="trans('Password')"
                                            placeholder="store@example.com"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="password"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>
                                </div>
                                
                                <div class="flex px-[16px] py-[10px] justify-end items-center">
                                    <button 
                                        type="submit"
                                        class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                    >
                                        @lang('installer::app.installer.installer.save-configuration')
                                    </button>
                                </div>
                                
                            </form>
                        </x-installer::form>
                    </div>

                    <!-- Installation Completed -->
                    <div
                        class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                        v-if="currentStep == 'installationCompleted'"
                    >
                        <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                            <p class="text-[20px] text-gray-800 font-bold">
                                Installation
                            </p>
                        </div>

                        <div class="flex flex-col gap-[15px] justify-center px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                            <div class="flex flex-col gap-[16px]">
                                <div class="flex items-center justify-center rounded-full border border-green-500 w-[30px] h-[30px]">
                                    <span class="icon-tick text-[20px] text-green-500 font-semibold"></span>
                                </div>

                                <div class="grid gap-[10px]">
                                    <p class="text-[18px] text-gray-800 font-semibold">
                                        Installing Completed
                                    </p>

                                    <p class="text-[14px] text-gray-600">
                                        Bagisto is successfully installed on your system.
                                    </p>

                                    <div class="flex justify-between items-center max-w-[288px]">
                                        <div class="px-[12px] py-[6px] bg-white border border-blue-700 rounded-[6px] text-blue-600 font-semibold cursor-pointer hover:opacity-90">
                                            Admin Panel
                                        </div>

                                        <div class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90">
                                            Customer Panel
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex px-[16px] py-[10px] justify-between items-center">
                            <a
                                href="https://forums.bagisto.com"
                                class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                            >
                                Bagisto Forums
                            </a>

                            <a
                                href="https://bagisto.com/en/extensions"
                                class="px-[12px] py-[6px] bg-white border border-blue-700 rounded-[6px] text-blue-600 font-semibold cursor-pointer hover:opacity-90"
                            >
                                Explore Bagisto Extentions
                            </a>
                        </div>
                    </div>
                </script>


                <script type="module">
                    app.component('v-server-requirements', {
                        template: '#v-server-requirements-template',
                
                        data() {
                            return {
                                currentStep: 'environment',

                                envData: {},

                                steps: [
                                    'environment',
                                    'envSetup',
                                    'envDatabase',
                                    'readyForInstallation',
                                    'installProgress',
                                    'installationLog',
                                    'createAdmin',
                                    'emailConfiguration',
                                    'installationCompleted',
                                ],
                            }
                        },

                        mounted() {
                            let sessionValue = sessionStorage.getItem('currentStep');

                            if (sessionValue) { 
                                this.currentStep = sessionValue;
                            }
                        },
        
                        methods: {
                            FormSubmit(params) {
                                const stepActions = {
                                    environment: () => {
                                        sessionStorage.setItem('currentStep', 'environment');

                                        this.currentStep = 'envSetup';
                                    },

                                    envSetup: () => {
                                        this.envData = { ...params };

                                        sessionStorage.setItem('currentStep', 'envSetup');

                                        this.currentStep = 'envDatabase';
                                    },

                                    envDatabase: () => {
                                        this.envData = { ...this.envData, ...params };
                                        
                                        sessionStorage.setItem('currentStep', 'envDatabase');

                                        this.currentStep = 'readyForInstallation';
                                    },

                                    readyForInstallation: () => {
                                        this.currentStep = 'installProgress';

                                        this.complete();
                                    },

                                    installationLog: () => {
                                        this.currentStep = 'createAdmin';
                                    },

                                    createAdmin: () => {
                                        this.saveAdmin(params);
                                    },

                                    emailConfiguration: () => {
                                        this.saveSmtp(params);
                                    },
                                };

                                const index = this.steps.find(step => step === this.currentStep);

                                if (stepActions[index]) {
                                    stepActions[index]();
                                }
                            },

                            complete() {
                                this.$axios.post("{{ route('installer.envFileSetup') }}", this.envData)
                                    .then((response) => {
                                        this.currentStep = 'installationLog';

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                                    })
                                    .catch(error => {
                                        if (error.response.status == 422) {
                                            setErrors(error.response.data.errors);
                                        }
                                    });
                            },

                            saveAdmin(params) {
                                //Save Admin Details in ENV File HERE

                                this.currentStep = 'emailConfiguration';
                            },

                            saveSmtp(params) {
                                //Save SMTP Details in ENV File HERE
                                
                                this.currentStep = 'installationCompleted';
                            },

                            back() {
                                let index = this.steps.indexOf(this.currentStep);

                                if (index >0) {
                                    this.currentStep = this.steps[index -1];
                                }
                            },
                        },
                    });
                </script>
            @endPushOnce

            @stack('scripts')
    </body>
</html>