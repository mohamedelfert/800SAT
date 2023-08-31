<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'user-list',
                'display_name' => 'المستخدمين',
                'guard_name' => 'web',
                'routes' => 'dashboard.users.index',
            ], [
                'name' => 'user-create',
                'display_name' => 'المستخدمين',
                'guard_name' => 'web',
                'routes' => 'dashboard.users.create,dashboard.users.store',
            ], [
                'name' => 'user-edit',
                'display_name' => 'المستخدمين',
                'guard_name' => 'web',
                'routes' => 'dashboard.users.edit,dashboard.users.update',
            ], [
                'name' => 'user-delete',
                'display_name' => 'المستخدمين',
                'guard_name' => 'web',
                'routes' => 'dashboard.users.destroy',
            ], [
                'name' => 'user-show',
                'display_name' => 'المستخدمين',
                'guard_name' => 'web',
                'routes' => 'dashboard.users.show',
            ],[
                'name' => 'user-showProfile',
                'display_name' => 'المستخدمين',
                'guard_name' => 'web',
                'routes' => 'dashboard.users.showProfile',
            ],[
                'name' => 'user-profile',
                'display_name' => 'المستخدمين',
                'guard_name' => 'web',
                'routes' => 'dashboard.users.profile',
            ], [
                'name' => 'role-list',
                'display_name' => 'الصلاحيات',
                'guard_name' => 'web',
                'routes' => 'dashboard.roles.index',
            ], [
                'name' => 'role-create',
                'display_name' => 'الصلاحيات',
                'guard_name' => 'web',
                'routes' => 'dashboard.roles.create,dashboard.roles.store',
            ], [
                'name' => 'role-edit',
                'display_name' => 'الصلاحيات',
                'guard_name' => 'web',
                'routes' => 'dashboard.roles.edit,dashboard.roles.update',
            ], [
                'name' => 'role-delete',
                'display_name' => 'الصلاحيات',
                'guard_name' => 'web',
                'routes' => 'dashboard.roles.destroy',
            ], [
                'name' => 'role-show',
                'display_name' => 'الصلاحيات',
                'guard_name' => 'web',
                'routes' => 'dashboard.roles.show',
            ],[
                'name' => 'setting-list',
                'display_name' => 'الإعدادات',
                'guard_name' => 'web',
                'routes' => 'dashboard.settings.index',
            ],[
                'name' => 'setting-edit',
                'display_name' => 'الإعدادات',
                'guard_name' => 'web',
                'routes' => 'dashboard.settings.update',
            ],[
                'name' => 'dashboard-index',
                'display_name' => 'الرئيسيه',
                'guard_name' => 'web',
                'routes' => 'dashboard.index',
            ],[
                'name' => 'contact-list',
                'display_name' => 'الرسائل',
                'guard_name' => 'web',
                'routes' => 'dashboard.contacts.index',
            ], [
                'name' => 'contact-delete',
                'display_name' => 'الرسائل',
                'guard_name' => 'web',
                'routes' => 'dashboard.contacts.destroy',
            ], [
                'name' => 'contact-show',
                'display_name' => 'الرسائل',
                'guard_name' => 'web',
                'routes' => 'dashboard.contacts.show',
            ],[
                'name' => 'article-list',
                'display_name' => 'المقالات',
                'guard_name' => 'web',
                'routes' => 'dashboard.articles.index',
            ], [
                'name' => 'article-create',
                'display_name' => 'المقالات',
                'guard_name' => 'web',
                'routes' => 'dashboard.articles.create,dashboard.articles.store',
            ], [
                'name' => 'article-edit',
                'display_name' => 'المقالات',
                'guard_name' => 'web',
                'routes' => 'dashboard.articles.edit,dashboard.articles.update',
            ], [
                'name' => 'article-delete',
                'display_name' => 'المقالات',
                'guard_name' => 'web',
                'routes' => 'dashboard.articles.destroy',
            ], [
                'name' => 'article-show',
                'display_name' => 'المقالات',
                'guard_name' => 'web',
                'routes' => 'dashboard.articles.show',
            ],[
                'name' => 'faq-list',
                'display_name' => 'الاستفسارات',
                'guard_name' => 'web',
                'routes' => 'dashboard.faqs.index',
            ], [
                'name' => 'faq-create',
                'display_name' => 'الاستفسارات',
                'guard_name' => 'web',
                'routes' => 'dashboard.faqs.create,dashboard.faqs.store',
            ], [
                'name' => 'faq-edit',
                'display_name' => 'الاستفسارات',
                'guard_name' => 'web',
                'routes' => 'dashboard.faqs.edit,dashboard.faqs.update',
            ], [
                'name' => 'faq-delete',
                'display_name' => 'الاستفسارات',
                'guard_name' => 'web',
                'routes' => 'dashboard.faqs.destroy',
            ], [
                'name' => 'faq-show',
                'display_name' => 'الاستفسارات',
                'guard_name' => 'web',
                'routes' => 'dashboard.faqs.show',
            ],[
                'name' => 'project-list',
                'display_name' => 'المشاريع',
                'guard_name' => 'web',
                'routes' => 'dashboard.projects.index',
            ], [
                'name' => 'project-create',
                'display_name' => 'المشاريع',
                'guard_name' => 'web',
                'routes' => 'dashboard.projects.create,dashboard.projects.store',
            ], [
                'name' => 'project-edit',
                'display_name' => 'المشاريع',
                'guard_name' => 'web',
                'routes' => 'dashboard.projects.edit,dashboard.projects.update',
            ], [
                'name' => 'project-delete',
                'display_name' => 'المشاريع',
                'guard_name' => 'web',
                'routes' => 'dashboard.projects.destroy',
            ], [
                'name' => 'project-show',
                'display_name' => 'المشاريع',
                'guard_name' => 'web',
                'routes' => 'dashboard.projects.show',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission['name'],
                'display_name' => $permission['display_name'],
                'guard_name' => $permission['guard_name'],
                'routes' => $permission['routes'],
            ]);
        }
    }
}
