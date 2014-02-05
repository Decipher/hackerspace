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
libraries[hackerspace][download][url] = git@github.com:ballarat-hackerspace/hackerspace.git
libraries[hackerspace][destination] = ..
libraries[hackerspace][directory_name] = all
