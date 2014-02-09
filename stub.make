api = 2
core = 7.x



; Includes - Core

includes[] = http://drupalcode.org/project/commons.git/blob_plain/7.x-3.8:/drupal-org-core.make



; Install profiles

projects[commons][type] = profile
projects[commons][version] = 3.8
; Make first group optional - https://drupal.org/node/2114755#comment-7987939
projects[commons][patch][] = https://drupal.org/files/optional_first_group-2114755-1.patch



; Custom code

; Note: This isn't actually a library, but the 'destination'/'directory_name'
;       parameters trick allow all custom code to be kept in a profile-esque
;       structured repository for a sites/all configuration.

libraries[hackerspace][download][type] = git
libraries[hackerspace][download][url] = https://github.com/ballarat-hackerspace/hackerspace.git
libraries[hackerspace][destination] = ..
libraries[hackerspace][directory_name] = all



; Modules

projects[coffee][type] = module
projects[coffee][subdir] = contrib
projects[coffee][version] = 2.0

projects[context][type] = module
projects[context][subdir] = contrib
projects[context][version] = 3.2

projects[context_module][type] = module
projects[context_module][subdir] = contrib
projects[context_module][version] = 1.0

projects[context_variable][type] = module
projects[context_variable][subdir] = contrib
projects[context_variable][version] = 1.1

projects[context_server_vars][type] = module
projects[context_server_vars][subdir] = contrib
projects[context_server_vars][version] = 1.0

projects[features_override][type] = module
projects[features_override][subdir] = contrib
projects[features_override][version] = 2.0-rc1

projects[stage_file_proxy][type] = module
projects[stage_file_proxy][subdir] = contrib
projects[stage_file_proxy][version] = 1.4
