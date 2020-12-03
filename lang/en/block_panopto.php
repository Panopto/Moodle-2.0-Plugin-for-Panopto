<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file contains all of the language strings needed by Panopto.
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2016 with contributions from Spenser Jones (sjones@ambrose.edu)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_a_panopto_server'] = 'None - Please add a Panopto server/appkey to continue';
$string['add_to_panopto'] = 'Sync this course to Panopto';
$string['api_manager_unavailable'] = 'Unable to create the {$a} manager API client! (Is the Panopto server available, if so are the instance name and application key correct?)';
$string['application_key'] = 'Application key';
$string['async_wait_warning'] = 'Async tasks will cause a delay before syncing the users. This is usually 5-15 minutes but can change depending on the Moodle configuration.';
$string['attempt_provision_course'] = 'Attempting to provision a Panopto folder with an External Id of: {$a}.';
$string['attempt_sync_user'] = 'Attempting to sync a user with an Id of {$a} to Panopto.';
$string['attempt_sync_user_server'] = 'Target server of the attempted sync is {$a}.';
$string['attempted_import_course_id'] = 'Moodle Id of the source import course';
$string['attempted_moodle_course_id'] = 'Attempted Moodle course Id';
$string['attempted_panopto_server'] = 'Attempted Panopto server';
$string['attempted_provisioning_personal_folder'] = 'Attempted to provision to a personal folder, this is not currently an action supported by Panopto. Please map the course to a different folder through the block instance config and try reprovisioning.';
$string['attempt_unprovision_course'] = 'Attempting to unprovision a Panopto folder with an external Id of {$a}.';
$string['attempted_target_course_id'] = 'Moodle Id of the target course';
$string['attribute_ensure_branch_failed'] = 'Ensure branch error';
$string['attribute_ensured_branch'] = 'Ensured branch hierarchy';
$string['attribute_new_name'] = 'New folder name';
$string['attribute_original_name'] = 'Original folder name';
$string['attribute_target_branch_leaf'] = 'Target branch leaf node category name';
$string['attribute_target_panopto_server'] = 'Target Panopto Server';
$string['autoprovision_off'] = 'Do not provision new courses';
$string['autoprovision_new_courses'] = 'Automatically provision newly created courses';
$string['autoprovision_on_block_view'] = 'Automatically provision the first time the Panopto block is viewed';
$string['back_to_config'] = 'Back to config';
$string['back_to_course'] = 'Back to course';
$string['begin_building_category_structure'] = 'Start building category structure';
$string['begin_reinitializing_imports'] = 'Begin reinitializing imports';
$string['block_edit_error'] = 'Cannot configure block instance: Global configuration incomplete. Please contact your system administrator.';
$string['block_edit_error_inherited_permissions'] = 'This folder inherits its sharing permissions access from a parent folder and therefore cannot be tied to a course. Please adjust the sharing setting to remove the inherited settings.';
$string['block_edit_header'] = 'Select the Panopto course folder to display in this block.';
$string['block_edit_header_help'] = 'Choose an existing Panopto course folder or provision a new Panopto course folder for this block';
$string['block_global_add_courses'] = 'Add Moodle courses to Panopto';
$string['block_global_application_key'] = 'Application key';
$string['block_global_application_key_desc'] = 'Enter the application key from the Panopto identity providers page.';
$string['block_global_build_category_structure'] = 'Sync all Moodle categories to Panopto';
$string['block_global_hostname'] = 'Panopto server hostname';
$string['block_global_hostname_desc'] = 'Enter the FQDN of your Panopto server. For example, demo.example.panopto.com';
$string['block_global_instance_desc'] = 'Enter the instance name from the Panopto identity providers page.';
$string['block_global_instance_name'] = 'Moodle instance name';
$string['block_global_panopto_bulk_and_batch_tools'] = 'Bulk and Batch Operation Tools';
$string['block_global_panopto_folder_and_category_options'] = 'Folder and Category Options';
$string['block_global_panopto_http_and_debug_settings'] = 'Http and Debugging Options';
$string['block_global_panopto_role_options'] = 'Panopto Role options';
$string['block_global_panopto_server_config'] = 'Panopto Server Configuration';
$string['block_global_panopto_syncing_options'] = 'Panopto Syncing Options';
$string['block_global_reinitialize_all_imports'] = 'Reinitialize all Panopto folder imports';
$string['block_global_rename_all_folders'] = 'Update all Panopto folder names';
$string['block_global_unprovision_courses'] = 'Unprovision Panopto folders from Moodle courses';
$string['block_global_upgrade_all_folders'] = 'Upgrade all existing folders and imports';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Allow all Users with Creator Access to View Panopto Folder Settings Links';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'When selected, any user with a Creator role in the folder can view its settings link. By default, only course instructors can view the course settings link.';
$string['block_panopto_anyone_view_recorder_links'] = 'Allow All Roles to View Recorder Download Links';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'When selected, viewers can view the recorder download links. By default, only users with Creator and/or provisioning access on a folder can view the download links.';
$string['block_panopto_async_tasks'] = 'Enable Asynchronous Synchronization Tasks (not recommended)';
$string['block_panopto_async_tasks_desc'] = 'When selected, the login, enrolment, unenrolment, category enforcement, and delete user tasks happen asynchronously. If this option is deselected, these operations happen in the event handler synchronously. As it is difficult to detect the failure in a timely manner. we do not recommend this option.';
$string['block_panopto_auto_add_block_to_new_courses'] = 'Automatically add a Panopto block to new courses';
$string['block_panopto_auto_add_block_to_new_courses_desc'] = "When selected this will automatically insert a Panopto block into all new Moodle course pages.";
$string['block_panopto_auto_insert_lti_link_to_new_courses'] = 'Automatically create an LTI tool link for new courses';
$string['block_panopto_auto_insert_lti_link_to_new_courses_desc'] = "When selected this will automatically insert a folder view course tool link to your automatic operation Panopto server into the first available section of your Moodle course page. Note: This feature requires that you add the following custom parameter to the Pre-configured LTI tool you wish to be embedded into the course: panopto_course_embed_tool=true";
$string['block_panopto_auto_provision'] = 'Automatically provision courses';
$string['block_panopto_auto_provision_desc'] = 'This option can be set to automatically provision a Panopto course folder when a course is created. This option can also be set to automatically provision a course when the Panopto block is first viewed on it. Please note that even if this value is \'Do not provision new courses\', courses may still be automatically provisioned if \'Automatically Grant Permissions when Importing a Course\' is selected.';
$string['block_panopto_auto_sync_imports'] = 'Automatically Grant Permissions when Importing a Course';
$string['block_panopto_auto_sync_imports_desc'] = 'When selected, Panopto automatically grants viewer permissions when importing a course. This setting must also be selected for Panopto\'s Course Copy V2 process.';
$string['block_panopto_automatic_operation_target_server'] = 'Automatic operation target server';
$string['block_panopto_automatic_operation_target_server_desc'] = 'Select the Panopto server that will be targeted for the \'Automatically provision new courses\', \'Sync user on login\' and \'Enforce category structure\' tasks';
$string['block_panopto_check_server_status'] = 'Check server health before loading block';
$string['block_panopto_check_server_status_desc'] = 'When selected, the target Panopto server is checked to ensure that it is running to avoid potentially long timeout calls when the server is unreachable. This is deselected by default as it uses a platform / OS-dependent feature. This should only be selected if you have been advised to do so by Panopto Support.';
$string['block_panopto_check_server_interval'] = 'Server health check interval';
$string['block_panopto_check_server_interval_desc'] = 'How often the server health check should attempt to connect to the Panopto server. The result will be saved and cached until the next health check.';
$string['block_panopto_copy_provision'] = 'Copy course provisioning';
$string['block_panopto_copy_provision_desc'] = 'This option can be set to determine which course or courses we want to provision during copy or import process.';
$string['block_panopto_creator_mapping'] = 'Creator role mapping';
$string['block_panopto_creator_mapping_desc'] = 'Select which course roles are set as Creators in new Panopto course folders.';
$string['block_panopto_enforce_category_after_course_provision'] = 'Create Category Folders on Course (Re)provision';
$string['block_panopto_enforce_category_after_course_provision_desc'] = 'When selected, (re)provisioning will make folders for the categories the course is in as well as the course folder itself.';
$string['block_panopto_enforce_category_structure'] = 'Sync New and Moved Categories with Panopto';
$string['block_panopto_enforce_category_structure_desc'] = 'When selected, any time a category is created or moved, its category structure will be mirrored on the Panopto site.';
$string['block_panopto_enforce_https_on_wsdl'] = 'Enforce HTTPS on Panopto API Calls';
$string['block_panopto_enforce_https_on_wsdl_desc'] = 'When selected, HTTPS endpoints are used for Panopto API calls. This setting is strongly recommended.';
$string['block_panopto_folder_name_style'] = 'Panopto Folder Name Appearance';
$string['block_panopto_folder_name_style_desc'] = 'Select the way new Panopto folders appear in the Moodle block.';
$string['block_panopto_non_editing_teacher_provision'] = 'Allow non-editing teacher to provision';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Enable this option to allow non-editing teachers to provision Panopto course folders.';
$string['block_panopto_panopto_connection_timeout'] = 'Panopto Connection Timeout';
$string['block_panopto_panopto_connection_timeout_desc'] = 'In seconds, this is the timeout length for connecting to Panopto. This value should only be changed if advised by Panopto Support.';
$string['block_panopto_panopto_socket_timeout'] = 'Panopto Socket Timeout';
$string['block_panopto_panopto_socket_timeout_desc'] = 'In seconds, the length of time the plugin will wait for Panopto to complete a task after connecting. This value should only be changed if advised by Panopto Support.';
$string['block_panopto_print_log_to_file'] = 'Redirect Error Logs to a Text File';
$string['block_panopto_print_log_to_file_desc'] = 'When selected, Panopto logging from the PHP error_log will be redirected to a .txt file, “PanoptoLogs.txt” inside the base Moodle directory.  This should only be selected if Panopto Support recommends it.';
$string['block_panopto_print_verbose_logs'] = 'Print Verbose Logs';
$string['block_panopto_print_verbose_logs_desc'] = 'When selected, more logs will be added to the Panopto PHP error_log. This should only be selected on an as-needed basis for debugging purposes.';
$string['block_panopto_publisher_mapping'] = 'Publisher role mapping';
$string['block_panopto_publisher_mapping_desc'] = 'Select which course roles are set as publishers in new Panopto course folders.';
$string['block_panopto_publisher_system_role_mapping'] = 'System roles with provisioning permissions';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Select which system roles can provision new Panopto course folders. Adding roles to this setting may have a performance impact on larger systems.';
$string['block_panopto_server_number_desc'] = 'Click \'Save Changes\' to update number of servers.';
$string['block_panopto_server_number_name'] = 'Number of Panopto servers';
$string['block_panopto_sso_sync_type'] = 'Panopto SSO Sync Behavior';
$string['block_panopto_sso_sync_type_desc'] = 'Select the behavior for user syncing when accessing Panopto content. Users can be synced at the same time as they are logged into Panopto, or in the background using an asynchronous task after they have successfully logged in.';
$string['block_panopto_sync_after_login'] = 'Authenticate and Sync to Panopto on Moodle Login (not recommended)';
$string['block_panopto_sync_after_login_desc'] = 'When selected, users are authenticated with Panopto and their permissions are synced when logging in to Moodle. Typically, authentication and permission sync will occur when a user accesses Panopto in the course and as such, we only recommend that organizations turn this setting on if they do not place the Panopto block in Moodle (not recommended). Additionally, log-in time will be extended if this option is selected.';
$string['block_panopto_sync_after_provisioning'] = 'Sync Enrolled Users after Successfully Provisioning (not recommended)';
$string['block_panopto_sync_after_provisioning_desc'] = 'When selected, all users enrolled in a course that is active and visible will be synchronized after provisioning. Typically, when a user accesses the Panopto block in a course, authentication and permission sync of that course happen. As such, we only recommend that organizations turn this setting on if they do not place the Panopto block in Moodle (not recommended).';
$string['block_panopto_sync_on_enrolment'] = 'Sync Users after Class Enrolment (optional)';
$string['block_panopto_sync_on_enrolment_desc'] = 'When selected, the permission when a student is enrolled into a course is synchronized with a valid Panopto folder. When disabled, users will be synced with Panopto when the user views the Panopto block. If you do not intend to use the block in a course, or if a course has embedded Panopto content directly into the course homepage (content will load before the block syncs in this case), this feature can be enabled. Note: Enabling this feature may cause a performance slowdown when enroling users.';
$string['block_panopto_wsdl_proxy_host'] = 'WSDL Proxy Host';
$string['block_panopto_wsdl_proxy_host_desc'] = 'Optionally, you can add in the host address used as a proxy for any Panopto service WSDL.';
$string['block_panopto_wsdl_proxy_port'] = 'WSDL Proxy Port';
$string['block_panopto_wsdl_proxy_port_desc'] = 'Optionally, you can add in the port used as a proxy for any Panopto service WSDL.';
$string['build_category_structure_start'] = 'Beginning to Map all Moodle Categories to {$a}';
$string['bulk_task_access_error'] = 'BULK TASK BLOCKED: The user {$a} does not have access to a provisioned Panopto course folder. Working user must have at least viewer access to all Panopto course folders for bulk operations. It is highly reccommended that the working user is an Administrator on Panopto.';
$string['bulk_task_contact_support'] = 'Please open a Panopto support ticket if you have any questions.';
$string['bulk_task_new_step'] = 'Now beginning the step: {$a}';
$string['bulk_task_reached_count'] = 'Reached desired folder count, moving onto next step';
$string['bulk_task_rename_cli_command'] = 'php -f rename_all_folders_cli.php';
$string['bulk_task_rename_warning'] = 'This process will rename any Panopto folders provisioned to a Moodle course, if the name of the Moodle course has changed since it was originally provisioned. Once this has been run, this process can not be undone. This process may take a while if you have a large number of courses. You may want to run this using the command line to avoid a timeout in your browser. To do so, connect to your Moodle environment and run the following command from the /lib/cli directory:';
$string['bulk_task_reprovision_cli_command'] = 'php -f upgrade_all_folders_cli.php';
$string['bulk_task_reprovision_warning'] = 'This process will reprovision all of your Moodle courses in Panopto. This process may take a while if you have a large number of courses. You may want to run this using the command line to avoid a timeout in your browser. To do so, connect to your Moodle environment and run the following command from the /lib/cli directory:';
$string['bulk_task_skipping_folder'] = 'Skipping folder {$a}';
$string['bulk_task_update_progress'] = 'Processing folder {$a->currentprogress} out of {$a->totalitems}';
$string['bulk_task_working_count'] = 'Starting on folder {$a->beginningindex} and processing up to folder {$a->endingindex}';
$string['bulk_remove_all_adhoc_task'] = 'Removing all queued Panopto adhoc tasks';
$string['bulk_rename_single_failed'] = 'Failed to update the folder name for a folder associated with Moodle course Id {$a}';
$string['bulk_rename_single_unnecessary'] = 'No need to rename, folder already matches course name of {$a}';
$string['bulk_rename_single_success'] = 'Successfully renamed folder for Moodle course Id {$a->moodleid}. Old name: {$a->oldname}, New name: {$a->newname}';
$string['bulk_rename_start_button'] = 'Begin renaming folders';
$string['bulk_rename_start_renaming'] = 'Beginning to update all folder names';
$string['bulk_reprovision_begin_reprovision'] = 'Re-provisioning Verified courses';
$string['bulk_reprovision_start'] = 'Upgrading all panopto folders';
$string['bulk_reprovision_start_button'] = 'Begin upgrading folders';
$string['bulk_task_version_error'] = 'Panopto Bulk Operation Error - Panopto Server requires newer version';
$string['categories_need_newer_panopto'] = 'Category calls need a Panopto server version of {$a->requiredpanoptoversion} to succeed, the targeted Panopto server\'s version is {$a->activepanoptoversion}.';
$string['cli_category_invalid_arguments'] = 'Please run the command with the following arguments \'build_category_structure.php <panoptoservername> <applicationkey>\'';
$string['cli_heading_build_category_structure'] = 'Sync all Moodle categories to Panopto';
$string['completed_recordings'] = 'Completed recordings';
$string['copy_access_error'] = 'User does not have access to Panopto folder linked to import source course with Id of {$a->importedcourseid}.';
$string['copy_api_error'] = 'Error importing course with Id {$a->importedcourseid}. Please see the Panopto PHP error logs for more details.';
$string['copy_api_error_auth'] = 'Error getting authorized with the panopto server {$a}.';
$string['copy_api_error_response'] = 'Failed copy response: {$a}';
$string['copy_course_init'] = 'Course copy has initialized, queueing job to copy content from Panopto folder mapped to Moodle course with Id {$a->SourceCourseContext} to a Panopto folder mapped to the Moodle course with Id {$a->TargetCourseContext}';
$string['course'] = 'Course';
$string['course_already_provisioned'] = 'This course has already been provisioned to  folder with a public Id of: {$a}.';
$string['course_has_invalid_panopto_data'] = 'The target Moodle course is no associated with valid Panopto folder data.';
$string['course_name'] = 'Course name';
$string['course_settings'] = 'Course settings';
$string['current_version'] = 'Current version: {$a}';
$string['current_version_attr'] = 'Current version';
$string['creator'] = 'Creator';
$string['creator_help'] = 'A Creator can create and edit content in Panopto';
$string['creators'] = 'Creators';
$string['download_recorder'] = 'Download recorder';
$string['ensure_category_branch_failed'] = 'Call to ensure category branch did not succeed, please see Panopto log for more details.';
$string['ensure_category_branch_start'] = 'Beginning to ensure category branch for leaf category: {$a->categoryname} on Panopto server {$a->targetserver}.';
$string['ensure_category_branch_success'] = 'Category branch ensured with the following structure: \n {$a}';
$string['error_invalid_category_information'] = 'The target category did not contain valid information.';
$string['error_no_admin_account_found'] = 'Error: No admin account was found';
$string['error_retrieving'] = 'Error retrieving Panopto course folder. Please check the PHP error_log for more details.';
$string['existing_course'] = 'Select an existing Panopto folder that is not currently mapped to another course:';
$string['existing_course_help'] = 'Please note that we cannot map to the assignment folders or folders with inherited permissions.';
$string['fetching_content'] = 'Fetching Panopto content...';
$string['folder_not_found_error'] = 'The folder currently provisioned to the target Moodle course on the Panopto server could not be found, was it deleted? Provisioning will continue by linking to the default Moodle folder or creating one if it does not already exist.';
$string['get_provisioning_info'] = 'Attempting to get provisioning info for a course with the Moodle Id: {$a}.';
$string['groups_getting_synced'] = 'Groups to be synced with this call: {$a}';
$string['impacted_server'] = 'Impacted server: {$a}';
$string['impacted_server_attr'] = 'Impacted server';
$string['import_access_error'] = 'User does not have access to Panopto folder linked to import source course with Id of {$a->importedcourseid}.';
$string['import_error'] = 'Error importing course with Id {$a->importedcourseid}. Here is the error message: {$a->errormessage}';
$string['import_not_mapped'] = 'The imported course was not provisioned to a Panopto folder! (no session_group_id set in block_panopto_foldermap)';
$string['import_status'] = 'Import attempt status';
$string['import_success'] = 'Successfully imported course with Id {$a->importedcourseid}.';
$string['init_import_source'] = 'Attempted import source Moodle course Id: {$a}.';
$string['init_import_target'] = 'Attempted import target Moodle course Id: {$a}.';
$string['invalid_folder_information'] = 'The Panopto information for this course is invalid. Please re-provision this course.';
$string['links'] = 'Links';
$string['live_sessions'] = 'Live sessions';
$string['minimum_required_version'] = 'Minimum required version: {$a}';
$string['minimum_required_version_attr'] = 'Minimum required version';
$string['missing_moodle_required_version'] = 'Panopto block requires a Moodle version newer than {$a->requiredversion}, your current Moodle version is: {$a->currentversion}';
$string['missing_required_version'] = 'API call failed to return a response, this could be because the Panopto server you attempted to use does not meet the minimum required version to support this version of the Moodle Panopto Block. This could also be caused by the server being unavailable.';
$string['moodle_course_not_exist'] = 'Moving row to old foldermap, course did not exist inside Moodle.';
$string['name_style_combination'] = '[short name]: [full name]';
$string['name_style_fullname'] = '[full name]';
$string['name_style_shortname'] = '[short name]';
$string['no_access'] = 'You do not have access to view this Panopto folder.';
$string['no_completed_recordings'] = 'No completed recordings';
$string['no_course_selected'] = 'No Panopto course folder selected';
$string['no_creators'] = 'No Creators.';
$string['no_folder_associated_with_moodle_id'] = 'No Panopto folder has been associated with a Moodle course with the Id {$a}';
$string['no_live_sessions'] = 'No live sessions';
$string['no_publishers'] = 'No publishers.';
$string['no_server'] = 'There are no servers set up for provisioning. Please contact system administrator.';
$string['no_viewers'] = 'No viewers.';
$string['no_users_synced_desc'] = 'Any users enrolled in the course will be synced to Panopto once they view the Panopto block in a course.';
$string['or'] = 'OR';
$string['panopto:addinstance'] = 'Add a new Panopto block';
$string['panopto:myaddinstance'] = 'Add a new Panopto block to my page';
$string['panopto:provision_aspublisher'] = 'Provision as a publisher';
$string['panopto:provision_asteacher'] = 'Provision as a teacher';
$string['panopto:provision_course'] = 'Provision a course';
$string['panopto:provision_multiple'] = 'Provision multiple courses at once';
$string['panopto_course_tool'] = 'Panopto Course Tool';
$string['panopto_sync_external_user_error'] = 'Could not sync panopto user: {$a}.';
$string['panopto_server_error'] = 'Panopto server {$a} returned with server error, will try again on next sign in.';
$string['pluginname'] = 'Panopto';
$string['podcast_audio'] = 'Audio podcast';
$string['podcast_feeds'] = 'Podcast feeds';
$string['podcast_video'] = 'Video podcast';
$string['privacy:metadata:block_panopto'] = 'In order to integrate with a Panopto service, user data needs to be exchanged with that service.';
$string['privacy:metadata:block_panopto:email'] = 'Your email is sent to Panopto to allow use of Panopto\'s email features.';
$string['privacy:metadata:block_panopto:firstname'] = 'Your first name is sent to Panopto to allow showing user\'s real name in Panopto\'s user experience.';
$string['privacy:metadata:block_panopto:lastname'] = 'Your last name is sent to Panopto to allow showing user\'s real name in Panopto\'s user experience.';
$string['privacy:metadata:block_panopto:username'] = 'Your username is sent to Panopto to allow it to create a Panopto account using the Moodle username as the Panopto username.';
$string['provision'] = 'Provision';
$string['provision_access_error'] = 'Course already provisioned to a Panopto folder and the current user does not have access to perform operations on that folder (User needs at least viewer access to target Panopto folder).';
$string['provision_both_on_copy'] = 'Provision both courses during copy or import process.';
$string['provision_course_link_text'] = 'Provision course';
$string['provision_courses'] = 'Provision courses';
$string['provision_error'] = 'Error provisioning course, please check logs for more details.';
$string['provision_only_target_on_copy'] = 'Only provision the target course during a copy or import process, as long as the source course is already provisioned.';
$string['provision_successful'] = 'Successfully provisioned course folder with Id: {$a}';
$string['provisioncourseselect'] = 'Select courses to provision.';
$string['provisioncourseselect_help'] = 'Multiple selections are possible by Ctrl-clicking (Windows) or Cmd-clicking (Mac).';
$string['publisher'] = 'Publisher';
$string['publisher_help'] = 'A Publisher can approve content submitted by Creators';
$string['publishers'] = 'Publishers';
$string['reinitialize_import_finished'] = 'finished reininitialize import.';
$string['reinitialize_import_started'] = 'Beginning to reininitialize import.';
$string['removed_panopto_adhoc_tasks'] = 'All existing Panopto adhoc tasks were deleted';
$string['bulk_task_removing_bad_folder_row'] = 'Foldermap entry appears corrupted, moving entry to old_foldermap for user reference. Corrupted row used for course with Moodle Id: {$a}';
$string['require_panopto_version_title'] = 'Minimum Panopto version required for this version of the Moodle Panopto block';
$string['result'] = 'Result';
$string['role_map_header'] = 'Change Panopto role mappings';
$string['role_map_header_help'] = 'Choose how Moodle roles map to Panopto roles. Unmapped Moodle roles will be assigned the viewer role in Panopto';
$string['select_server'] = 'Select a Panopto server';
$string['select_server_help'] = 'Choose the Panopto server where the course folders will be provisioned.';
$string['server_info_not_valid'] = 'The server name or application key are not valid, below are attempted values.';
$string['server_name'] = 'Server name';
$string['server_not_available'] = 'The Panopto server {$a} was not available. Server may be down';
$string['show_all'] = 'Show all';
$string['show_less'] = 'Show less';
$string['sso_invalid_authcode'] = 'Invalid auth code.';
$string['sso_invalid_server'] = 'Invalid Panopto Server. Server needs to be configured in Panopto block config before use.';
$string['sso_type_asyncsync'] = 'Make asynchronous sync task on Panopto login';
$string['sso_type_nosync'] = 'Do not sync on Panopto login';
$string['sso_type_sync'] = 'Sync on Panopto login';
$string['synced_user_info'] = 'Synced user information';
$string['viewers'] = 'Viewers';
$string['take_notes'] = 'Take notes';
$string['target_invalid_panopto_data'] = 'The panopto data living in the foldermap table associated with the target course of this import was either corrupted or no longer exists, removing Panopto relation and moving on.';
$string['target_moodle_course_deleted'] = 'The course that this import was associated with no longer exists, removing panopto relation and moving on.';
$string['unconfigured'] = 'Global configuration incomplete. Please contact your system administrator.';
$string['unknown_provisioning_error'] = 'An unknown error has occurred.';
$string['unprovision_from_moodle'] = 'Unprovision this course from the current Panopto folder';
$string['unprovision'] = 'Unprovision';
$string['unprovision_courses'] = 'Unprovision courses from Panopto';
$string['unprovision_requires_newer_server'] = 'Unprovisioning requires a Panopto server version of at least 7.0.0';
$string['unprovision_successful'] = 'Unprovision was a success';
$string['unprovision_error'] = 'Unprovision encountered an error and did not succeed';
$string['unprovisioncourseselect'] = 'Select which courses you want to unprovision from Panopto';
$string['unprovisioncourseselect_help'] = 'Multiple selections are possible by Ctrl-clicking (Windows) or Cmd-clicking (Mac).';
$string['unprovisioned'] = 'This course has not yet been provisioned.';
$string['upgrade_panopto_required_version'] = 'A Panopto server you are using does not meet the minimum required version to support this version of the Moodle Panopto Block. The upgrade will be blocked from succeeding until all Panopto servers in use meet minimum version requirements.';
$string['username_field_to_send'] = 'User name field to send to Panopto';
$string['username_field_to_send_desc'] = 'Choose user/userprofile field name to send to Panopto for creating its account.';
$string['users_have_been_synced'] = 'The below users have been synced and should be ready to use Panopto.';
$string['users_will_be_synced_custom'] = 'Future users will automatically be synced according to your custom Panopto settings.';
$string['verifying_permission'] = 'Verifying permission';
$string['watch_live'] = 'Watch live';
/* End of file block_panopto.php */
