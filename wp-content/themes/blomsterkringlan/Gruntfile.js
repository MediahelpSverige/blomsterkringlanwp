module.exports = function(grunt) {

  //Configure task(s)
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json')

    uglify: {
      build: {
        src: 'src/js/*.js',
      }
    }
  });


};