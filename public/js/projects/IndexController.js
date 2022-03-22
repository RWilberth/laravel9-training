/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/projects/IndexController.js":
/*!**************************************************!*\
  !*** ./resources/js/projects/IndexController.js ***!
  \**************************************************/
/***/ (() => {

eval("window.IndexController = function () {\n  var deleteProject = function deleteProject(form) {\n    Swal.fire({\n      title: 'Do you want to delete the project?',\n      showDenyButton: false,\n      showCancelButton: true,\n      confirmButtonText: 'Delete'\n    }).then(function (result) {\n      if (result.isConfirmed) {\n        form.submit();\n      }\n    });\n  };\n\n  var initEvents = function initEvents() {\n    $('.btn-delete-project').on('click', function () {\n      var deleteForm = $(this).siblings('form');\n      deleteProject(deleteForm);\n    });\n  };\n\n  this.init = function () {\n    initEvents();\n  };\n\n  return this;\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcHJvamVjdHMvSW5kZXhDb250cm9sbGVyLmpzPzQyNzkiXSwibmFtZXMiOlsid2luZG93IiwiSW5kZXhDb250cm9sbGVyIiwiZGVsZXRlUHJvamVjdCIsImZvcm0iLCJTd2FsIiwiZmlyZSIsInRpdGxlIiwic2hvd0RlbnlCdXR0b24iLCJzaG93Q2FuY2VsQnV0dG9uIiwiY29uZmlybUJ1dHRvblRleHQiLCJ0aGVuIiwicmVzdWx0IiwiaXNDb25maXJtZWQiLCJzdWJtaXQiLCJpbml0RXZlbnRzIiwiJCIsIm9uIiwiZGVsZXRlRm9ybSIsInNpYmxpbmdzIiwiaW5pdCJdLCJtYXBwaW5ncyI6IkFBQ0FBLE1BQU0sQ0FBQ0MsZUFBUCxHQUF5QixZQUFXO0FBRWhDLE1BQU1DLGFBQWEsR0FBRyxTQUFoQkEsYUFBZ0IsQ0FBVUMsSUFBVixFQUFnQjtBQUNsQ0MsSUFBQUEsSUFBSSxDQUFDQyxJQUFMLENBQVU7QUFDTkMsTUFBQUEsS0FBSyxFQUFFLG9DQUREO0FBRU5DLE1BQUFBLGNBQWMsRUFBRSxLQUZWO0FBR05DLE1BQUFBLGdCQUFnQixFQUFFLElBSFo7QUFJTkMsTUFBQUEsaUJBQWlCLEVBQUU7QUFKYixLQUFWLEVBS0tDLElBTEwsQ0FLVSxVQUFDQyxNQUFELEVBQVk7QUFDbEIsVUFBSUEsTUFBTSxDQUFDQyxXQUFYLEVBQXdCO0FBQ3BCVCxRQUFBQSxJQUFJLENBQUNVLE1BQUw7QUFDSDtBQUNGLEtBVEg7QUFVSCxHQVhEOztBQVlBLE1BQU1DLFVBQVUsR0FBRyxTQUFiQSxVQUFhLEdBQVc7QUFDMUJDLElBQUFBLENBQUMsQ0FBQyxxQkFBRCxDQUFELENBQXlCQyxFQUF6QixDQUE0QixPQUE1QixFQUFxQyxZQUFVO0FBQzNDLFVBQU1DLFVBQVUsR0FBR0YsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRRyxRQUFSLENBQWlCLE1BQWpCLENBQW5CO0FBQ0FoQixNQUFBQSxhQUFhLENBQUNlLFVBQUQsQ0FBYjtBQUVILEtBSkQ7QUFLSCxHQU5EOztBQVFBLE9BQUtFLElBQUwsR0FBWSxZQUFNO0FBQ2RMLElBQUFBLFVBQVU7QUFDYixHQUZEOztBQUdBLFNBQU8sSUFBUDtBQUNILENBMUJEIiwic291cmNlc0NvbnRlbnQiOlsiXG53aW5kb3cuSW5kZXhDb250cm9sbGVyID0gZnVuY3Rpb24oKSB7XG5cbiAgICBjb25zdCBkZWxldGVQcm9qZWN0ID0gZnVuY3Rpb24gKGZvcm0pIHtcbiAgICAgICAgU3dhbC5maXJlKHtcbiAgICAgICAgICAgIHRpdGxlOiAnRG8geW91IHdhbnQgdG8gZGVsZXRlIHRoZSBwcm9qZWN0PycsXG4gICAgICAgICAgICBzaG93RGVueUJ1dHRvbjogZmFsc2UsXG4gICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxuICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6ICdEZWxldGUnLFxuICAgICAgICAgIH0pLnRoZW4oKHJlc3VsdCkgPT4ge1xuICAgICAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xuICAgICAgICAgICAgICAgIGZvcm0uc3VibWl0KCk7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgfSk7XG4gICAgfVxuICAgIGNvbnN0IGluaXRFdmVudHMgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgJCgnLmJ0bi1kZWxldGUtcHJvamVjdCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICBjb25zdCBkZWxldGVGb3JtID0gJCh0aGlzKS5zaWJsaW5ncygnZm9ybScpO1xuICAgICAgICAgICAgZGVsZXRlUHJvamVjdChkZWxldGVGb3JtKTtcblxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICB0aGlzLmluaXQgPSAoKSA9PiB7XG4gICAgICAgIGluaXRFdmVudHMoKTtcbiAgICB9XG4gICAgcmV0dXJuIHRoaXM7XG59O1xuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wcm9qZWN0cy9JbmRleENvbnRyb2xsZXIuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/projects/IndexController.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/projects/IndexController.js"]();
/******/ 	
/******/ })()
;