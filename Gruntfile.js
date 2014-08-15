'use strict';
module.exports = function(grunt) {
	var jsFiles = [
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
			'sass': {
				files: ['sass/**/*.scss'],
				tasks: ['sass']
			},
			'js': {
				files: [jsFiles],
				tasks: ['concat', 'uglify']
			},
			'livereload': {
				options: {
					port: 35729,
					livereload: true
				},
				files: ['sass/**/*.scss', jsFiles, '**/*.php', 'img/**/*.{png,jpg,jpeg,gif,svg}']
			}
		},

		// sass
		'sass': {
			development: {
				options: {
					style: 'compressed'
				},
				files: {
					'css/css.css': 'sass/index.scss'
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
		}

	});

	// register task
	grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);
};