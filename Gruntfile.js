'use strict';
module.exports = function(grunt) {
    var source = 'C:/path/to/working/directory',
        destination = '/public_html',
        host = 'kvhouten.info',

        // ex: 'grunt deploy --target=less' to deploy '/less' folder
        target = (grunt.option('target') ? '/' + grunt.option('target') : ''),

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
                files: ['**/*.less', jsFiles, '**/*.php', 'img/**/*.{png,jpg,jpeg,gif,svg}']
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
            development: {
                files: {
                    "js/js.js": [jsFiles]
                }
            }
        },

        // minify js
        'uglify': {
            development: {
                files: {
                    "js/js.js": "js/js.js"
                }
            }
        },

        // deploy
        'ftp-deploy': {
            production: {
                auth: {
                  host: host,
                  port: 21,
                  authKey: 'primary'
                },
                src: source + target,
                dest: destination + target,
                exclusions: [
                    source + '/.*',
                    source + '/Gruntfile',
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