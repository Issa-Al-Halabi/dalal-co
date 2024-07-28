<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\SpatieLaravelTranslatablePlugin;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Blade;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->favicon(asset("favicon.png"))
            // ->renderHook(
            //     "panels::global-search.before",
            //     fn (): string => Blade::render('<x-filament::button
            //     href="{{ route('.'\'generateSitemap\''.') }}"
            //     tag="a"
            // >
            //     تحديث ال sitemap
            // </x-filament::button>'),
            // )
            ->renderHook(
                "panels::styles.after",
                fn (): string => Blade::render('
                <style>
               .fi-fo-wizard-header.grid.divide-y
                {
                    grid-template-columns: repeat(auto-fit, minmax(150px, auto));
                    grid-auto-flow: inherit;
                }
                </style>
                    '),
            )
            // to prevent guard name to appear in filament shield
            ->renderHook(
                "panels::styles.after",
                fn (): string => Blade::render('
                <style>
                .fi-fo-component-ctn.gap-6 > div:nth-child(1) > div > div > div > section > div > div > div > div:nth-child(2)
                {
                    display:none;
                }
                table > thead > tr > th.fi-ta-header-cell.px-3.py-3\.5.sm\:first-of-type\:ps-6.sm\:last-of-type\:pe-6.fi-table-header-cell-guard-name
                {
                    display:none;
                }
                table > tbody > tr > td.fi-ta-cell.p-0.first-of-type\:ps-1.last-of-type\:pe-1.sm\:first-of-type\:ps-3.sm\:last-of-type\:pe-3.fi-table-cell-guard-name
                {
                    display:none;
                }
                </style>
                    '),
            )
            ->databaseNotifications(true)
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Teal,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->brandLogo(asset('front-assets/images/logo-admin.png'))
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make()->gridColumns([
                    'default' => 1,
                    'sm' => 2,
                    'lg' => 3
                ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 2,
                        'sm' => 2,
                        'lg' => 3,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),
                SpatieLaravelTranslatablePlugin::make()
                    ->defaultLocales(['ar', 'en']),

            ])

            ->navigationGroups(
                [
                    'مستخدمين النظام',
                    'الخادمات',
                    'إدارة الوصول',
                ]
            );
    }
}
