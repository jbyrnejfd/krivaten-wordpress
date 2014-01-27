'use strict';
module.exports = function(grunt) {
    var source = 'C:/Users/Kris Van Houten/Documents/Development/dev/wp-content/themes/krivaten-wordpress',
        destination = '/public_html/test',
        host = 'kvhouten.info',

        jsFiles = [
            'vendor/bootstrap/js/alert.js',
            'vendor/bootstrap/js/button.js',
            'vendor/bootstrap/js/collapse.js',
            'vendor/bootstrap/js/dropdown.js',
            'vendor/bootstrap/js/modal.js',
            'vendor/bootstrap/js/transition.js',
            'vendor/bootstrap-datepicker/js/bootstrap-datepicker.js',
            'vendor/jquery-touchswipe/jquery.touchSwipe.min.js',
            'js/custom.js'
        ];

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch for changes and trigger compass, jshint, uglify and livereload
        'watch': {
            less: {
                files: ['less/**/*.less'],
                tasks: ['less']
            },
            js: {
                files: [jsFiles],
                tasks: ['concat', 'uglify']
            },
            livereload: {
                options: {
                    port: 35729,
                    livereload: true
                },
                files: ['less/**/*.less', jsFiles, '*.php', 'img/**/*.{png,jpg,jpeg,gif,svg}']
            }
        },

        // less
        'less': {
            development: {
                options: {
                    compress: true
                },
                files: {
                    'css/css.css': 'less/style.less'
                }
            }
        },

        // js
        'concat': {
            production: {
                files: {
                    "js/js.js": [jsFiles]
                }
            }
        },

        // minify js and css
        'uglify': {
            production: {
                files: {
                    "js/js.js": "js/js.js"
                }
            }
        },

        // deploy
        'ftp-deploy': {
            build: {
                auth: {
                  host: host,
                  port: 21,
                  authKey: 'primary'
                },
                src: source,
                dest: destination,
                exclusions: [
                    source + '/.*',
                    source + '/node_modules',
                    source + '/bower.json',
                    source + '/package.json',
                    source + '/vendor'

                ]
            }
        }

    });

    // register task
    grunt.registerTask('default', ['less', 'concat', 'uglify', 'watch']);
    grunt.registerTask('deploy', ['ftp-deploy']);

};