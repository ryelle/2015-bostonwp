/* jshint node:true */
module.exports = function(grunt) {
	var path = require('path'),
		THEME_NAME = 'bostonwp-2015';

	// Load tasks.
	require('matchdep').filterDev('grunt-*').forEach( grunt.loadNpmTasks );

	// Project configuration.
	grunt.initConfig({
		sass: {
			dev: {
				options: {
					style: 'expanded',
					noCache: false,
					sourcemap: false
				},
				expand: true,
				cwd: 'sass/',
				dest: '',
				ext: '.css',
				src: [ 'style.scss', 'editor-style.scss' ]
			},
		},

		autoprefixer: {
			options: {},
			dev: {
				src: [ 'style.css', 'editor-style.css' ]
			},
		},

		concat: {
			dev: {
				src: [ 'js/src/*.js' ],
				dest: 'js/' + THEME_NAME + '.js',
			},
		},

		watch: {
			css: {
				files: [ 'sass/**' ],
				tasks: [ 'sass:dev', 'autoprefixer:dev' ]
			},
			js: {
				files: [ 'js/src/**' ],
				tasks: [ 'concat:dev' ]
			}
		}
	});

	// Register tasks.

	// Build task.
	grunt.registerTask( 'dev', [ 'sass:dev', 'autoprefixer:dev', 'concat:dev' ]);

	// Default task.
	grunt.registerTask( 'default', [ 'dev' ]);

};
