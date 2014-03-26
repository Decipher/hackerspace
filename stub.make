api = 2
core = 7.x



; Includes

includes[] = https://raw.githubusercontent.com/ballarat-hackerspace/hackerspace/master/drupal-org.make



; Install profiles

projects[commons][type] = core
projects[commons][version] = 7.x-3.9


; Custom code

; Note: This isn't actually a library, but the 'destination'/'directory_name'
;       parameters trick allow all custom code to be kept in a profile-esque
;       structured repository for a sites/all configuration.

libraries[hackerspace][download][type] = git
libraries[hackerspace][download][url] = https://github.com/ballarat-hackerspace/hackerspace.git
libraries[hackerspace][destination] = ..
libraries[hackerspace][directory_name] = all
