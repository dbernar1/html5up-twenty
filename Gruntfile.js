"use strict";

module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		watch: {
			sass: {
				files: 'css/sass/*.scss',
				tasks: [ 'sass' ],
			}
		},
		sass: {
			dist: {
				files: [ {
					expand: true,
					cwd: 'css/sass',
					src: [ '**/*.scss' ],
					dest: 'css/',
					ext: '.css',
				} ],
				options: {
					style: 'compact'
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['watch']);
};
