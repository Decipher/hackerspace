api = 2
core = 7.x



; Modules

projects[coffee][type] = module
projects[coffee][subdir] = contrib
projects[coffee][version] = 2.0

projects[context][type] = module
projects[context][subdir] = contrib
projects[context][version] = 3.2

projects[context_module][type] = module
projects[context_module][subdir] = contrib
projects[context_module][download][type] = git
projects[context_module][download][revision] = b7a05aa1299d9286b77f66c539826de9bebde2fb
; Prevent redirect loop - https://drupal.org/node/2076565#comment-7804715
projects[context_module][patch][] = https://drupal.org/files/redirect_loop-2076565-1.patch

projects[context_server_vars][type] = module
projects[context_server_vars][subdir] = contrib
projects[context_server_vars][download][type] = git
projects[context_server_vars][download][revision] = 1d61d973ddb7513de9c3d82b33c8e24c24e907f2

projects[context_variable][type] = module
projects[context_variable][subdir] = contrib
projects[context_variable][download][type] = git
projects[context_variable][download][revision] = cd9b3b9b64acd5ac3a1c6c180eadff34294c3f11

projects[email][type] = module
projects[email][subdir] = contrib
projects[email][version] = 1.2

projects[entityform][type] = module
projects[entityform][subdir] = contrib
projects[entityform][version] = 2.0-beta2

projects[features_override][type] = module
projects[features_override][subdir] = contrib
projects[features_override][version] = 2.0-rc1

projects[stage_file_proxy][type] = module
projects[stage_file_proxy][subdir] = contrib
projects[stage_file_proxy][version] = 1.4
; Add Variable module integration - https://drupal.org/node/2183195#comment-8421499
projects[stage_file_proxy][patch][] = https://drupal.org/files/issues/add_variable_module_integration-2183195-1.patch



; Themes

projects[bootstrap][type] = theme
projects[bootstrap][subdir] = contrib
projects[bootstrap][version] = 3.0
