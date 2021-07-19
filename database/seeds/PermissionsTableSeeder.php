<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 19,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 20,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 21,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 22,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 23,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 24,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 25,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 26,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 27,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 28,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 29,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 30,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 31,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 32,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 33,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 34,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 35,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 36,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 37,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 41,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 42,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 43,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 44,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 45,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 46,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 47,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 48,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 49,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 50,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 51,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 52,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 53,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 54,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 55,
                'title' => 'expense_create',
            ],
            [
                'id'    => 56,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 57,
                'title' => 'expense_show',
            ],
            [
                'id'    => 58,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 59,
                'title' => 'expense_access',
            ],
            [
                'id'    => 60,
                'title' => 'income_create',
            ],
            [
                'id'    => 61,
                'title' => 'income_edit',
            ],
            [
                'id'    => 62,
                'title' => 'income_show',
            ],
            [
                'id'    => 63,
                'title' => 'income_delete',
            ],
            [
                'id'    => 64,
                'title' => 'income_access',
            ],
            [
                'id'    => 65,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 66,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 67,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 68,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 69,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 70,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 71,
                'title' => 'currency_create',
            ],
            [
                'id'    => 72,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 73,
                'title' => 'currency_show',
            ],
            [
                'id'    => 74,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 75,
                'title' => 'currency_access',
            ],
            [
                'id'    => 76,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 77,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 78,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 79,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 80,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 81,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 82,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 83,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 84,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 85,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 86,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 87,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 88,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 89,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 90,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 91,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 92,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 93,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 94,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 95,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 96,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 97,
                'title' => 'client_create',
            ],
            [
                'id'    => 98,
                'title' => 'client_edit',
            ],
            [
                'id'    => 99,
                'title' => 'client_show',
            ],
            [
                'id'    => 100,
                'title' => 'client_delete',
            ],
            [
                'id'    => 101,
                'title' => 'client_access',
            ],
            [
                'id'    => 102,
                'title' => 'project_create',
            ],
            [
                'id'    => 103,
                'title' => 'project_edit',
            ],
            [
                'id'    => 104,
                'title' => 'project_show',
            ],
            [
                'id'    => 105,
                'title' => 'project_delete',
            ],
            [
                'id'    => 106,
                'title' => 'project_access',
            ],
            [
                'id'    => 107,
                'title' => 'note_create',
            ],
            [
                'id'    => 108,
                'title' => 'note_edit',
            ],
            [
                'id'    => 109,
                'title' => 'note_show',
            ],
            [
                'id'    => 110,
                'title' => 'note_delete',
            ],
            [
                'id'    => 111,
                'title' => 'note_access',
            ],
            [
                'id'    => 112,
                'title' => 'document_create',
            ],
            [
                'id'    => 113,
                'title' => 'document_edit',
            ],
            [
                'id'    => 114,
                'title' => 'document_show',
            ],
            [
                'id'    => 115,
                'title' => 'document_delete',
            ],
            [
                'id'    => 116,
                'title' => 'document_access',
            ],
            [
                'id'    => 117,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 118,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 119,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 120,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 121,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 122,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 123,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 124,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 125,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 126,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 127,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 128,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 129,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 130,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 131,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 132,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 133,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 134,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 135,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 136,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 137,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 138,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 139,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 140,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 141,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 142,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 143,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 144,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 145,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 146,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 147,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 148,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 149,
                'title' => 'task_create',
            ],
            [
                'id'    => 150,
                'title' => 'task_edit',
            ],
            [
                'id'    => 151,
                'title' => 'task_show',
            ],
            [
                'id'    => 152,
                'title' => 'task_delete',
            ],
            [
                'id'    => 153,
                'title' => 'task_access',
            ],
            [
                'id'    => 154,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 155,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
