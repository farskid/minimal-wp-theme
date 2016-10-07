'use strict';
// Be sure to change the relative path next time for grunt
module.exports = function (grunt) {
  // scripts
  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'css/style.css': 'scss/index.scss'
        }
      }
    },
    autoprefixer: {
      compile: {
        files: {
          'css/style.css': 'css/style.css'
        }
      }
    },
    watch: {
      css: {
        files: ['scss/**/*.scss'],
        tasks: ['sass', 'autoprefixer']
      }
    }
  });


  //load tasks and register tasks
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['sass', 'autoprefixer', 'watch']);
};
