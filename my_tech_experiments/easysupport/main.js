(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "./src/$$_lazy_route_resource lazy recursive":
/*!**********************************************************!*\
  !*** ./src/$$_lazy_route_resource lazy namespace object ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./src/$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./src/app/about/about.component.css":
/*!*******************************************!*\
  !*** ./src/app/about/about.component.css ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2Fib3V0L2Fib3V0LmNvbXBvbmVudC5jc3MifQ== */"

/***/ }),

/***/ "./src/app/about/about.component.html":
/*!********************************************!*\
  !*** ./src/app/about/about.component.html ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<p>\n  about works!\n</p>\n"

/***/ }),

/***/ "./src/app/about/about.component.ts":
/*!******************************************!*\
  !*** ./src/app/about/about.component.ts ***!
  \******************************************/
/*! exports provided: AboutComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AboutComponent", function() { return AboutComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var AboutComponent = /** @class */ (function () {
    function AboutComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
    }
    AboutComponent.prototype.ngOnInit = function () {
    };
    AboutComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-about',
            template: __webpack_require__(/*! ./about.component.html */ "./src/app/about/about.component.html"),
            styles: [__webpack_require__(/*! ./about.component.css */ "./src/app/about/about.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], AboutComponent);
    return AboutComponent;
}());



/***/ }),

/***/ "./src/app/access/access.component.css":
/*!*********************************************!*\
  !*** ./src/app/access/access.component.css ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2FjY2Vzcy9hY2Nlc3MuY29tcG9uZW50LmNzcyJ9 */"

/***/ }),

/***/ "./src/app/access/access.component.html":
/*!**********************************************!*\
  !*** ./src/app/access/access.component.html ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<p>\n  access works!\n</p>\n"

/***/ }),

/***/ "./src/app/access/access.component.ts":
/*!********************************************!*\
  !*** ./src/app/access/access.component.ts ***!
  \********************************************/
/*! exports provided: AccessComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AccessComponent", function() { return AccessComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AccessComponent = /** @class */ (function () {
    function AccessComponent() {
    }
    AccessComponent.prototype.ngOnInit = function () {
    };
    AccessComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-access',
            template: __webpack_require__(/*! ./access.component.html */ "./src/app/access/access.component.html"),
            styles: [__webpack_require__(/*! ./access.component.css */ "./src/app/access/access.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], AccessComponent);
    return AccessComponent;
}());



/***/ }),

/***/ "./src/app/app-routing.module.ts":
/*!***************************************!*\
  !*** ./src/app/app-routing.module.ts ***!
  \***************************************/
/*! exports provided: AppRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppRoutingModule", function() { return AppRoutingModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};


var routes = [];
var AppRoutingModule = /** @class */ (function () {
    function AppRoutingModule() {
    }
    AppRoutingModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [_angular_router__WEBPACK_IMPORTED_MODULE_1__["RouterModule"].forRoot(routes)],
            exports: [_angular_router__WEBPACK_IMPORTED_MODULE_1__["RouterModule"]]
        })
    ], AppRoutingModule);
    return AppRoutingModule;
}());



/***/ }),

/***/ "./src/app/app.component.css":
/*!***********************************!*\
  !*** ./src/app/app.component.css ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2FwcC5jb21wb25lbnQuY3NzIn0= */"

/***/ }),

/***/ "./src/app/app.component.html":
/*!************************************!*\
  !*** ./src/app/app.component.html ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-header [loginEvent]=\"loginEvent\" (headerClickEvent)=\"receiveheaderClickEvent($event)\"></app-header>\n\n<div class=\"container-body-ht\">\n    <app-structure [headerClick]=\"headerClick\" (loginEvent)=\"receiveLoginEvent($event)\"></app-structure>\n</div>\n\n<app-footer></app-footer>\n\n"

/***/ }),

/***/ "./src/app/app.component.ts":
/*!**********************************!*\
  !*** ./src/app/app.component.ts ***!
  \**********************************/
/*! exports provided: AppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppComponent", function() { return AppComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var AppComponent = /** @class */ (function () {
    function AppComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
    }
    AppComponent.prototype.receiveLoginEvent = function ($event) {
        this.loginEvent = $event;
    };
    AppComponent.prototype.ngOnInit = function () {
    };
    AppComponent.prototype.receiveheaderClickEvent = function ($event) {
        this.headerClick = $event;
    };
    AppComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-root',
            template: __webpack_require__(/*! ./app.component.html */ "./src/app/app.component.html"),
            styles: [__webpack_require__(/*! ./app.component.css */ "./src/app/app.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], AppComponent);
    return AppComponent;
}());



/***/ }),

/***/ "./src/app/app.module.ts":
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _app_routing_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./app-routing.module */ "./src/app/app-routing.module.ts");
/* harmony import */ var angular_webstorage_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! angular-webstorage-service */ "./node_modules/angular-webstorage-service/bundles/angular-webstorage-service.es5.js");
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./app.component */ "./src/app/app.component.ts");
/* harmony import */ var _login_login_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./login/login.component */ "./src/app/login/login.component.ts");
/* harmony import */ var _header_header_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./header/header.component */ "./src/app/header/header.component.ts");
/* harmony import */ var _footer_footer_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./footer/footer.component */ "./src/app/footer/footer.component.ts");
/* harmony import */ var _user_user_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./user/user.component */ "./src/app/user/user.component.ts");
/* harmony import */ var _applinks_applinks_component__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./applinks/applinks.component */ "./src/app/applinks/applinks.component.ts");
/* harmony import */ var _dllists_dllists_component__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./dllists/dllists.component */ "./src/app/dllists/dllists.component.ts");
/* harmony import */ var _serverlist_serverlist_component__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./serverlist/serverlist.component */ "./src/app/serverlist/serverlist.component.ts");
/* harmony import */ var _teamhierarchy_teamhierarchy_component__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./teamhierarchy/teamhierarchy.component */ "./src/app/teamhierarchy/teamhierarchy.component.ts");
/* harmony import */ var _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! @angular/platform-browser/animations */ "./node_modules/@angular/platform-browser/fesm5/animations.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
/* harmony import */ var _about_about_component__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./about/about.component */ "./src/app/about/about.component.ts");
/* harmony import */ var _structure_structure_component__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./structure/structure.component */ "./src/app/structure/structure.component.ts");
/* harmony import */ var _access_access_component__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./access/access.component */ "./src/app/access/access.component.ts");
/* harmony import */ var _timeline_timeline_component__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./timeline/timeline.component */ "./src/app/timeline/timeline.component.ts");
/* harmony import */ var _vendor_vendor_component__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./vendor/vendor.component */ "./src/app/vendor/vendor.component.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};























var appRoutes = [
    { path: 'dashboard/apps', component: _applinks_applinks_component__WEBPACK_IMPORTED_MODULE_11__["ApplinksComponent"] },
    { path: 'dashboard/dllists', component: _dllists_dllists_component__WEBPACK_IMPORTED_MODULE_12__["DllistsComponent"] },
    { path: 'dashboard/servers', component: _serverlist_serverlist_component__WEBPACK_IMPORTED_MODULE_13__["ServerlistComponent"] },
    { path: 'dashboard/team', component: _teamhierarchy_teamhierarchy_component__WEBPACK_IMPORTED_MODULE_14__["TeamhierarchyComponent"] },
    { path: 'dashboard/timeline', component: _timeline_timeline_component__WEBPACK_IMPORTED_MODULE_20__["TimelineComponent"] },
    { path: 'dashboard/vendor', component: _vendor_vendor_component__WEBPACK_IMPORTED_MODULE_21__["VendorComponent"] },
    { path: 'about', component: _structure_structure_component__WEBPACK_IMPORTED_MODULE_18__["StructureComponent"] },
    { path: 'getAccess', component: _structure_structure_component__WEBPACK_IMPORTED_MODULE_18__["StructureComponent"] },
    { path: 'dashboard', component: _structure_structure_component__WEBPACK_IMPORTED_MODULE_18__["StructureComponent"] },
    { path: '', component: _applinks_applinks_component__WEBPACK_IMPORTED_MODULE_11__["ApplinksComponent"] }
    /*{ path: '**', component: HeaderComponent } */
];
var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            declarations: [
                _app_component__WEBPACK_IMPORTED_MODULE_6__["AppComponent"],
                _login_login_component__WEBPACK_IMPORTED_MODULE_7__["LoginComponent"],
                _header_header_component__WEBPACK_IMPORTED_MODULE_8__["HeaderComponent"],
                _footer_footer_component__WEBPACK_IMPORTED_MODULE_9__["FooterComponent"],
                _user_user_component__WEBPACK_IMPORTED_MODULE_10__["UserComponent"],
                _applinks_applinks_component__WEBPACK_IMPORTED_MODULE_11__["ApplinksComponent"],
                _dllists_dllists_component__WEBPACK_IMPORTED_MODULE_12__["DllistsComponent"],
                _serverlist_serverlist_component__WEBPACK_IMPORTED_MODULE_13__["ServerlistComponent"],
                _teamhierarchy_teamhierarchy_component__WEBPACK_IMPORTED_MODULE_14__["TeamhierarchyComponent"],
                _about_about_component__WEBPACK_IMPORTED_MODULE_17__["AboutComponent"],
                _structure_structure_component__WEBPACK_IMPORTED_MODULE_18__["StructureComponent"],
                _access_access_component__WEBPACK_IMPORTED_MODULE_19__["AccessComponent"],
                _timeline_timeline_component__WEBPACK_IMPORTED_MODULE_20__["TimelineComponent"],
                _vendor_vendor_component__WEBPACK_IMPORTED_MODULE_21__["VendorComponent"]
            ],
            imports: [
                _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__["BrowserModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormsModule"],
                angular_webstorage_service__WEBPACK_IMPORTED_MODULE_5__["StorageServiceModule"],
                _app_routing_module__WEBPACK_IMPORTED_MODULE_4__["AppRoutingModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_16__["MatAutocompleteModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_16__["MatPaginatorModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_16__["MatSortModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_16__["MatTableModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_16__["MatTreeModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_16__["MatIconModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_2__["ReactiveFormsModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forRoot(appRoutes, { enableTracing: true } // <-- debugging purposes only
                ),
                _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["BrowserAnimationsModule"]
            ],
            providers: [],
            schemas: [_angular_core__WEBPACK_IMPORTED_MODULE_1__["CUSTOM_ELEMENTS_SCHEMA"]],
            bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_6__["AppComponent"]]
        })
    ], AppModule);
    return AppModule;
}());



/***/ }),

/***/ "./src/app/applinks/applinks.component.css":
/*!*************************************************!*\
  !*** ./src/app/applinks/applinks.component.css ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "table {\r\n  width: 100%;\r\n}\r\n\r\n.mat-form-field {\r\n  font-size: 14px;\r\n  width: 100%;\r\n}\r\n\r\ntd, th {\r\n  width: 25%;\r\n}\r\n\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYXBwbGlua3MvYXBwbGlua3MuY29tcG9uZW50LmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLFlBQVk7Q0FDYjs7QUFFRDtFQUNFLGdCQUFnQjtFQUNoQixZQUFZO0NBQ2I7O0FBRUQ7RUFDRSxXQUFXO0NBQ1oiLCJmaWxlIjoic3JjL2FwcC9hcHBsaW5rcy9hcHBsaW5rcy5jb21wb25lbnQuY3NzIiwic291cmNlc0NvbnRlbnQiOlsidGFibGUge1xyXG4gIHdpZHRoOiAxMDAlO1xyXG59XHJcblxyXG4ubWF0LWZvcm0tZmllbGQge1xyXG4gIGZvbnQtc2l6ZTogMTRweDtcclxuICB3aWR0aDogMTAwJTtcclxufVxyXG5cclxudGQsIHRoIHtcclxuICB3aWR0aDogMjUlO1xyXG59XHJcbiJdfQ== */"

/***/ }),

/***/ "./src/app/applinks/applinks.component.html":
/*!**************************************************!*\
  !*** ./src/app/applinks/applinks.component.html ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-form-field>\n  <span><i class=\"fa fa-search\"></i></span>&nbsp;<input matInput (keyup)=\"applyFilter($event.target.value)\" placeholder=\"Find a link\" class=\"dt-table-filter-inpt sel-team-cl\">\n</mat-form-field>\n<div class=\"mid-spacer\"></div>\n<div class=\"mat-elevation-z8\">\n  <table mat-table [dataSource]=\"dataSource\" matSort>\n\n    <!-- ID Column -->\n    <ng-container matColumnDef=\"app\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header> <i class=\"fa fa-language icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; APPLICATION </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.app}} </td>\n    </ng-container>\n\t <!-- Progress Column -->\n    <ng-container matColumnDef=\"url\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-external-link icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; URL </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.url}} </td>\n    </ng-container>\n    <!-- Name Column -->\n    <ng-container matColumnDef=\"category\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-object-group icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; CATEGORY </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.category}} </td>\n    </ng-container>\n    <!-- Name Column -->\n    <ng-container matColumnDef=\"primary\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-user-o icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; SME </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.primary}} </td>\n    </ng-container>\n   \n    \n\n    <!-- Color Column -->\n    \n\n    <tr mat-header-row *matHeaderRowDef=\"displayedColumns\"></tr>\n    <tr mat-row *matRowDef=\"let row; columns: displayedColumns;\">\n    </tr>\n  </table>\n\n  <mat-paginator [pageSizeOptions]=\"[5, 10, 25, 100]\"></mat-paginator>\n</div>\n\n\n<!-- Copyright 2018 Google Inc. All Rights Reserved.\n    Use of this source code is governed by an MIT-style license that\n    can be found in the LICENSE file at http://angular.io/license -->"

/***/ }),

/***/ "./src/app/applinks/applinks.component.ts":
/*!************************************************!*\
  !*** ./src/app/applinks/applinks.component.ts ***!
  \************************************************/
/*! exports provided: ApplinksComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ApplinksComponent", function() { return ApplinksComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var ApplinksComponent = /** @class */ (function () {
    function ApplinksComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
        this.displayedColumns = ['app', 'url', 'category', 'primary'];
        // Create 100 users
        var users = [{ app: 'CloudWS', url: 'http://CloudWS', category: 'App', primary: 'Mittu Anand' },
            { app: 'CloudWS', url: 'http://wikipage/CloudWS', category: 'Documentation', primary: 'Mittu Anand' },
            { app: 'Infomatic', url: 'http://Infomatic', category: 'App', primary: 'Pawan Arya' },
            { app: 'Infomatic', url: 'http://wikipage/Infomatic', category: 'Documentation', primary: 'Pawan Arya' },
            { app: 'TEEPEEII', url: 'http://TEEPEEII', category: 'App', primary: 'Avneet Singh' },
            { app: 'Prometheus', url: 'http://wikipage/TEEPEEII', category: 'Documentation', primary: 'Avneet Singh' }];
        // Assign the data to the data source for the table to render
        this.dataSource = new _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatTableDataSource"](users);
    }
    ApplinksComponent.prototype.ngOnInit = function () {
        if (!this.sessionService.isSessionActive()) {
            this.router.navigate(['/']);
        }
        else {
            this.dataSource.paginator = this.paginator;
            this.dataSource.sort = this.sort;
        }
    };
    ApplinksComponent.prototype.applyFilter = function (filterValue) {
        this.dataSource.filter = filterValue.trim().toLowerCase();
        if (this.dataSource.paginator) {
            this.dataSource.paginator.firstPage();
        }
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"])
    ], ApplinksComponent.prototype, "paginator", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"])
    ], ApplinksComponent.prototype, "sort", void 0);
    ApplinksComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-applinks',
            template: __webpack_require__(/*! ./applinks.component.html */ "./src/app/applinks/applinks.component.html"),
            styles: [__webpack_require__(/*! ./applinks.component.css */ "./src/app/applinks/applinks.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], ApplinksComponent);
    return ApplinksComponent;
}());



/***/ }),

/***/ "./src/app/dllists/dllists.component.css":
/*!***********************************************!*\
  !*** ./src/app/dllists/dllists.component.css ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "table {\r\n  width: 100%;\r\n}\r\n\r\n.mat-form-field {\r\n  font-size: 14px;\r\n  width: 100%;\r\n}\r\n\r\ntd, th {\r\n  width: 25%;\r\n}\r\n\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvZGxsaXN0cy9kbGxpc3RzLmNvbXBvbmVudC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxZQUFZO0NBQ2I7O0FBRUQ7RUFDRSxnQkFBZ0I7RUFDaEIsWUFBWTtDQUNiOztBQUVEO0VBQ0UsV0FBVztDQUNaIiwiZmlsZSI6InNyYy9hcHAvZGxsaXN0cy9kbGxpc3RzLmNvbXBvbmVudC5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyJ0YWJsZSB7XHJcbiAgd2lkdGg6IDEwMCU7XHJcbn1cclxuXHJcbi5tYXQtZm9ybS1maWVsZCB7XHJcbiAgZm9udC1zaXplOiAxNHB4O1xyXG4gIHdpZHRoOiAxMDAlO1xyXG59XHJcblxyXG50ZCwgdGgge1xyXG4gIHdpZHRoOiAyNSU7XHJcbn1cclxuIl19 */"

/***/ }),

/***/ "./src/app/dllists/dllists.component.html":
/*!************************************************!*\
  !*** ./src/app/dllists/dllists.component.html ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-form-field>\n  <span><i class=\"fa fa-search\"></i></span>&nbsp; <input matInput (keyup)=\"applyFilter($event.target.value)\" placeholder=\"Find a DL\" class=\"dt-table-filter-inpt sel-team-cl\">\n</mat-form-field>\n<div class=\"mid-spacer\"></div>\n<div class=\"mat-elevation-z8\">\n  <table mat-table [dataSource]=\"dataSource\" matSort>\n\n    <!-- ID Column -->\n    <ng-container matColumnDef=\"team\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-group icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; TEAM </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.team}} </td>\n    </ng-container>\n\t <!-- Progress Column -->\n    <ng-container matColumnDef=\"dl\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-list-ol icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp;  DISTRIBUTION LIST </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.dl}} </td>\n    </ng-container>\n\n    <!-- Name Column -->\n    <ng-container matColumnDef=\"poc\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-user-circle icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; MANAGER/POC </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.poc}} </td>\n    </ng-container>\n   \n    \n\n    <!-- Color Column -->\n    \n\n    <tr mat-header-row *matHeaderRowDef=\"displayedColumns\"></tr>\n    <tr mat-row *matRowDef=\"let row; columns: displayedColumns;\">\n    </tr>\n  </table>\n\n  <mat-paginator [pageSizeOptions]=\"[5, 10, 25, 100]\"></mat-paginator>\n</div>\n\n\n<!-- Copyright 2018 Google Inc. All Rights Reserved.\n    Use of this source code is governed by an MIT-style license that\n    can be found in the LICENSE file at http://angular.io/license -->"

/***/ }),

/***/ "./src/app/dllists/dllists.component.ts":
/*!**********************************************!*\
  !*** ./src/app/dllists/dllists.component.ts ***!
  \**********************************************/
/*! exports provided: DllistsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DllistsComponent", function() { return DllistsComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var DllistsComponent = /** @class */ (function () {
    function DllistsComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
        this.displayedColumns = ['team', 'dl', 'poc'];
        // Create 100 users
        var users = [{ team: 'FAS', dl: 'DL_FAS@domain.com', poc: 'Pawan Arya - 0213478346' },
            { team: 'Dev', dl: 'DL_dev@domain.com', poc: 'Ricky Ponting - 0231378346' },
            { team: 'BAS', dl: 'DL_BAS@domain.com', poc: 'Matt Hayden - 0213478346' },
            { team: 'Billing', dl: 'DL_billing@domain.com', poc: 'Tom Moody - 0213478346' },
            { team: 'IP Team', dl: 'DL_ipt@domain.com', poc: 'David Boon - 0213478346' },
            { team: 'Firewall Team', dl: 'DL_Firewall@domain.com', poc: 'Ravi Shastri - 0213478346' },
            { team: 'Online', dl: 'DL_Online@domain.com', poc: 'Irfan Pathan - 0213478346' },
            { team: 'Digital', dl: 'DL_Digital@domain.com', poc: 'Daryll Cullinan - 0213478346' },
            { team: 'Innovations', dl: 'DL_Innovations@domain.com', poc: 'Greg Bewett - 0213478346' },
            { team: 'Unix Support', dl: 'DL_Unix@domain.com', poc: 'Sachin Tendulkar - 0213478346' },
            { team: 'Windows Support', dl: 'DL_windows@domain.com', poc: 'Andy Flower - 0213478346' },
            { team: 'Email Support', dl: 'DL_Email@domain.com', poc: 'Darren Gough - 0213478346' }];
        // Assign the data to the data source for the table to render
        this.dataSource = new _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatTableDataSource"](users);
    }
    DllistsComponent.prototype.ngOnInit = function () {
        if (!this.sessionService.isSessionActive()) {
            this.router.navigate(['/']);
        }
        else {
            this.dataSource.paginator = this.paginator;
            this.dataSource.sort = this.sort;
        }
    };
    DllistsComponent.prototype.applyFilter = function (filterValue) {
        this.dataSource.filter = filterValue.trim().toLowerCase();
        if (this.dataSource.paginator) {
            this.dataSource.paginator.firstPage();
        }
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"])
    ], DllistsComponent.prototype, "paginator", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"])
    ], DllistsComponent.prototype, "sort", void 0);
    DllistsComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-dllists',
            template: __webpack_require__(/*! ./dllists.component.html */ "./src/app/dllists/dllists.component.html"),
            styles: [__webpack_require__(/*! ./dllists.component.css */ "./src/app/dllists/dllists.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], DllistsComponent);
    return DllistsComponent;
}());



/***/ }),

/***/ "./src/app/footer/footer.component.css":
/*!*********************************************!*\
  !*** ./src/app/footer/footer.component.css ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2Zvb3Rlci9mb290ZXIuY29tcG9uZW50LmNzcyJ9 */"

/***/ }),

/***/ "./src/app/footer/footer.component.html":
/*!**********************************************!*\
  !*** ./src/app/footer/footer.component.html ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<footer>\n<div class=\"spacer\"></div>\n  <div class=\"container\">\n    <div class=\"row\">\n\t\t<div class=\"col-sm-12 text-center\">\n\t\t\t<p>&copy;easysupport. All rights reserved.</p>\n\t\t</div>\n\t</div>\n  </div>\n</footer>\n"

/***/ }),

/***/ "./src/app/footer/footer.component.ts":
/*!********************************************!*\
  !*** ./src/app/footer/footer.component.ts ***!
  \********************************************/
/*! exports provided: FooterComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FooterComponent", function() { return FooterComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FooterComponent = /** @class */ (function () {
    function FooterComponent() {
    }
    FooterComponent.prototype.ngOnInit = function () {
    };
    FooterComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-footer',
            template: __webpack_require__(/*! ./footer.component.html */ "./src/app/footer/footer.component.html"),
            styles: [__webpack_require__(/*! ./footer.component.css */ "./src/app/footer/footer.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], FooterComponent);
    return FooterComponent;
}());



/***/ }),

/***/ "./src/app/header/header.component.css":
/*!*********************************************!*\
  !*** ./src/app/header/header.component.css ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2hlYWRlci9oZWFkZXIuY29tcG9uZW50LmNzcyJ9 */"

/***/ }),

/***/ "./src/app/header/header.component.html":
/*!**********************************************!*\
  !*** ./src/app/header/header.component.html ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<header class=\"navbar bg-dark\">\n\t<a class=\"navbar-brand mr-0 mr-md-2\" href=\"/\" aria-label=\"EasySupport\">\n\t<div class=\"logo\"><i class=\"fa fa-edge text-red\" aria-hidden=\"true\"></i> EasySupport</div>\n\t</a>\n  \n\t<ul class=\"navbar-nav flex-row ml-md-auto d-none d-md-flex ext-links\" >\n\t\t<li class=\"nav-item\">\n\t\t  <a routerLink=\"/about\" (click)=\"switchComponent();\" *ngIf=\"!isLoggedIn\"><i class=\"fa fa-info-circle text-red\" aria-hidden=\"true\"></i> About</a>\n\t\t</li>\n\t\t<li class=\"nav-item\">\n\t\t  <a routerLink=\"/getAccess\" (click)=\"switchComponent();\" *ngIf=\"!isLoggedIn\"><i class=\"fa fa-key text-red\" aria-hidden=\"true\"></i> Get access</a>\n\t\t</li>\n\t\t<li class=\"nav-item\">\n\t\t  <a href=\"\" *ngIf=\"isLoggedIn\" (click)=\"logOut();\" class=\"btn btn-sm btn-danger\" alt=\"Logout\"> <i class=\"fa fa-power-off\" aria-hidden=\"true\"> </i></a>\n\t\t</li>\n    </ul>\n</header>"

/***/ }),

/***/ "./src/app/header/header.component.ts":
/*!********************************************!*\
  !*** ./src/app/header/header.component.ts ***!
  \********************************************/
/*! exports provided: HeaderComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HeaderComponent", function() { return HeaderComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var HeaderComponent = /** @class */ (function () {
    function HeaderComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
        this.isLoggedIn = false;
        this.headerClickEvent = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
    }
    HeaderComponent.prototype.ngOnInit = function () {
        this.isLoggedIn = this.sessionService.isSessionActive();
        if (this.isLoggedIn) {
            this.router.navigate(['']);
        }
    };
    HeaderComponent.prototype.ngOnChanges = function (changes) {
        this.isLoggedIn = changes.loginEvent.currentValue;
    };
    HeaderComponent.prototype.logOut = function () {
        this.sessionService.userLogOut();
        this.router.navigate(['']);
    };
    HeaderComponent.prototype.switchComponent = function () {
        var randomVal = Math.random();
        this.headerClickEvent.emit(randomVal);
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Boolean)
    ], HeaderComponent.prototype, "loginEvent", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], HeaderComponent.prototype, "headerClickEvent", void 0);
    HeaderComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-header',
            template: __webpack_require__(/*! ./header.component.html */ "./src/app/header/header.component.html"),
            styles: [__webpack_require__(/*! ./header.component.css */ "./src/app/header/header.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], HeaderComponent);
    return HeaderComponent;
}());



/***/ }),

/***/ "./src/app/login.service.ts":
/*!**********************************!*\
  !*** ./src/app/login.service.ts ***!
  \**********************************/
/*! exports provided: LoginService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LoginService", function() { return LoginService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var LoginService = /** @class */ (function () {
    function LoginService() {
    }
    LoginService.prototype.validateUser = function (userDetails) {
        userDetails.userlogged = true;
        return Object(rxjs__WEBPACK_IMPORTED_MODULE_1__["of"])(userDetails);
    };
    LoginService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])({
            providedIn: 'root'
        }),
        __metadata("design:paramtypes", [])
    ], LoginService);
    return LoginService;
}());



/***/ }),

/***/ "./src/app/login.ts":
/*!**************************!*\
  !*** ./src/app/login.ts ***!
  \**************************/
/*! exports provided: Login */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Login", function() { return Login; });
var Login = /** @class */ (function () {
    function Login() {
    }
    return Login;
}());



/***/ }),

/***/ "./src/app/login/login.component.css":
/*!*******************************************!*\
  !*** ./src/app/login/login.component.css ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2xvZ2luL2xvZ2luLmNvbXBvbmVudC5jc3MifQ== */"

/***/ }),

/***/ "./src/app/login/login.component.html":
/*!********************************************!*\
  !*** ./src/app/login/login.component.html ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"container\">\n<div class=\"row\">\n\t\t<div class=\"col-sm-12\">\n\t\t    \n\t\t\t<div class=\"col-sm-4 offset-md-4 font-josefin\">\n\t\t\t<div class=\"alert alert-cust\" *ngIf=\"!login\">Oops..! Invalid Login.</div>\n\t\t\t\t<form (ngSubmit)=\"onSubmit()\" class=\"login-form-st\" #loginForm=\"ngForm\">\n\t\t\t\t\t\n\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t<label for=\"username_login\">Username</label>\n\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"username_login\" name=\"user_login_name\" placeholder=\"Enter username\" required [(ngModel)]=\"userDetails.username\">\n\t\t\t\t\t\n\t\t\t\t  </div>\n\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t<label for=\"password_login\">Password</label>\n\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password_login\" name=\"user_login_password\" placeholder=\"Enter Password\" [(ngModel)]=\"userDetails.upassword\" required>\n\t\t\t\t \n\t\t\t\t  </div>\n\t\t\t\t  <button type=\"submit\" [disabled]=\"!loginForm.form.valid\" class=\"btn btn-sm btn-success\">Login</button>\n\t\t\t\t</form>\n\t\t\t</div>\n\t\t</div>\n</div>\n</div>"

/***/ }),

/***/ "./src/app/login/login.component.ts":
/*!******************************************!*\
  !*** ./src/app/login/login.component.ts ***!
  \******************************************/
/*! exports provided: LoginComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LoginComponent", function() { return LoginComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _login__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../login */ "./src/app/login.ts");
/* harmony import */ var _login_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../login.service */ "./src/app/login.service.ts");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};





var Userdata = /** @class */ (function () {
    function Userdata() {
    }
    return Userdata;
}());
var LoginComponent = /** @class */ (function () {
    function LoginComponent(loginService, sessionService, router) {
        this.loginService = loginService;
        this.sessionService = sessionService;
        this.router = router;
        this.userDetails = new _login__WEBPACK_IMPORTED_MODULE_1__["Login"]();
        this.isLoggedIn = false;
        this.login = true;
        this.loginEvent = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
    }
    LoginComponent.prototype.validateUser = function () {
        var _this = this;
        if (this.getUser(this.userDetails)) {
            this.loginService.validateUser(this.userDetails).subscribe(function (userDetails) { return _this.userDetails = userDetails; });
            if (this.userDetails.userlogged === true) {
                this.sessionService.setUserSession(this.userDetails);
                this.isLoggedIn = true;
                this.loginEvent.emit(this.isLoggedIn);
            }
        }
    };
    LoginComponent.prototype.getUser = function (userDetails) {
        var getUserData = [{ username: 'opsteam', passwordis: 'opsteam!' }, { username: 'opsnewteam', passwordis: 'opsnewteam!' }];
        this.login = false;
        for (var i = 0; i < getUserData.length; i++) {
            if (getUserData[i].username === userDetails.username && getUserData[i].passwordis === userDetails.upassword) {
                this.login = true;
                break;
            }
        }
        this.userDetails.username = "";
        this.userDetails.upassword = "";
        return this.login;
    };
    LoginComponent.prototype.onSubmit = function () {
        this.validateUser();
    };
    LoginComponent.prototype.ngOnInit = function () {
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], LoginComponent.prototype, "loginEvent", void 0);
    LoginComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-login',
            template: __webpack_require__(/*! ./login.component.html */ "./src/app/login/login.component.html"),
            styles: [__webpack_require__(/*! ./login.component.css */ "./src/app/login/login.component.css")]
        }),
        __metadata("design:paramtypes", [_login_service__WEBPACK_IMPORTED_MODULE_2__["LoginService"], _session_service__WEBPACK_IMPORTED_MODULE_3__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"]])
    ], LoginComponent);
    return LoginComponent;
}());



/***/ }),

/***/ "./src/app/serverlist/serverlist.component.css":
/*!*****************************************************!*\
  !*** ./src/app/serverlist/serverlist.component.css ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "table {\r\n  width: 100%;\r\n}\r\n\r\n.mat-form-field {\r\n  font-size: 14px;\r\n  width: 100%;\r\n}\r\n\r\ntd, th {\r\n  width: 25%;\r\n}\r\n\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2VydmVybGlzdC9zZXJ2ZXJsaXN0LmNvbXBvbmVudC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxZQUFZO0NBQ2I7O0FBRUQ7RUFDRSxnQkFBZ0I7RUFDaEIsWUFBWTtDQUNiOztBQUVEO0VBQ0UsV0FBVztDQUNaIiwiZmlsZSI6InNyYy9hcHAvc2VydmVybGlzdC9zZXJ2ZXJsaXN0LmNvbXBvbmVudC5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyJ0YWJsZSB7XHJcbiAgd2lkdGg6IDEwMCU7XHJcbn1cclxuXHJcbi5tYXQtZm9ybS1maWVsZCB7XHJcbiAgZm9udC1zaXplOiAxNHB4O1xyXG4gIHdpZHRoOiAxMDAlO1xyXG59XHJcblxyXG50ZCwgdGgge1xyXG4gIHdpZHRoOiAyNSU7XHJcbn1cclxuIl19 */"

/***/ }),

/***/ "./src/app/serverlist/serverlist.component.html":
/*!******************************************************!*\
  !*** ./src/app/serverlist/serverlist.component.html ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-form-field>\n  <span><i class=\"fa fa-search\"></i></span>&nbsp; <input matInput (keyup)=\"applyFilter($event.target.value)\" placeholder=\"Find a server\" class=\"dt-table-filter-inpt sel-team-cl\">\n</mat-form-field>\n<div class=\"mid-spacer\"></div>\n<div class=\"mat-elevation-z8\">\n  <table mat-table [dataSource]=\"dataSource\" matSort>\n\n    <!-- ID Column -->\n    <ng-container matColumnDef=\"app\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-language icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; APPLICATION </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.app}} </td>\n    </ng-container>\n\t <!-- Progress Column -->\n    <ng-container matColumnDef=\"hostname\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-adjust icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; HOSTNAME </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.hostname}} </td>\n    </ng-container>\n\n    <!-- Name Column -->\n    <ng-container matColumnDef=\"ip\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-share-alt icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; IP </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.ip}} </td>\n    </ng-container>\n   <!-- Name Column -->\n    <ng-container matColumnDef=\"os\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-linux icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; O.S</th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.os}} </td>\n    </ng-container>\n    <!-- Name Column -->\n    <ng-container matColumnDef=\"dc\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header><i class=\"fa fa-server icon-ctl text-red\" aria-hidden=\"true\"></i>&nbsp; DC </th>\n      <td mat-cell *matCellDef=\"let row\"> {{row.dc}} </td>\n    </ng-container>\n\n    <!-- Color Column -->\n    \n\n    <tr mat-header-row *matHeaderRowDef=\"displayedColumns\"></tr>\n    <tr mat-row *matRowDef=\"let row; columns: displayedColumns;\">\n    </tr>\n  </table>\n\n  <mat-paginator [pageSizeOptions]=\"[5, 10, 25, 100]\"></mat-paginator>\n</div>\n\n\n<!-- Copyright 2018 Google Inc. All Rights Reserved.\n    Use of this source code is governed by an MIT-style license that\n    can be found in the LICENSE file at http://angular.io/license -->"

/***/ }),

/***/ "./src/app/serverlist/serverlist.component.ts":
/*!****************************************************!*\
  !*** ./src/app/serverlist/serverlist.component.ts ***!
  \****************************************************/
/*! exports provided: ServerlistComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ServerlistComponent", function() { return ServerlistComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var ServerlistComponent = /** @class */ (function () {
    function ServerlistComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
        this.displayedColumns = ['app', 'hostname', 'ip', 'os', 'dc'];
        // Create 100 users
        var users = [{ app: 'TPII', hostname: 'tpii.hostname.com', ip: '51.41.31.21', os: 'Sun OS', dc: 'Wellington' },
            { app: 'Confimy', hostname: 'Confimy.hostname.com', ip: '61.41.31.21', os: 'Linux', dc: 'Christ church' },
            { app: 'Nopk', hostname: 'nopk.hostname.com', ip: '21.41.31.21', os: 'Solaris', dc: 'Sydney' },
            { app: 'SuportQ', hostname: 'spq.hostname.com', ip: '91.41.31.21', os: 'Ubuntu', dc: 'Melbourne' },
            { app: 'Kaba', hostname: 'kaba.hostname.com', ip: '101.41.31.21', os: 'Sun OS', dc: 'Florida' },
            { app: 'Nopk', hostname: 'nopk.hostname.com', ip: '21.41.31.21', os: 'Solaris', dc: 'Sydney' },
            { app: 'TPII', hostname: 'tpii.hostname.com', ip: '51.41.31.21', os: 'Sun OS', dc: 'Wellington' },
            { app: 'Confimy', hostname: 'Confimy.hostname.com', ip: '61.41.31.21', os: 'Linux', dc: 'Christ church' },
            { app: 'Nopk', hostname: 'nopk.hostname.com', ip: '21.41.31.21', os: 'Solaris', dc: 'Sydney' }];
        // Assign the data to the data source for the table to render
        this.dataSource = new _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatTableDataSource"](users);
    }
    ServerlistComponent.prototype.ngOnInit = function () {
        if (!this.sessionService.isSessionActive()) {
            this.router.navigate(['/']);
        }
        else {
            this.dataSource.paginator = this.paginator;
            this.dataSource.sort = this.sort;
        }
    };
    ServerlistComponent.prototype.applyFilter = function (filterValue) {
        this.dataSource.filter = filterValue.trim().toLowerCase();
        if (this.dataSource.paginator) {
            this.dataSource.paginator.firstPage();
        }
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"])
    ], ServerlistComponent.prototype, "paginator", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"])
    ], ServerlistComponent.prototype, "sort", void 0);
    ServerlistComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-serverlist',
            template: __webpack_require__(/*! ./serverlist.component.html */ "./src/app/serverlist/serverlist.component.html"),
            styles: [__webpack_require__(/*! ./serverlist.component.css */ "./src/app/serverlist/serverlist.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], ServerlistComponent);
    return ServerlistComponent;
}());



/***/ }),

/***/ "./src/app/session.service.ts":
/*!************************************!*\
  !*** ./src/app/session.service.ts ***!
  \************************************/
/*! exports provided: SessionService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SessionService", function() { return SessionService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var angular_webstorage_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! angular-webstorage-service */ "./node_modules/angular-webstorage-service/bundles/angular-webstorage-service.es5.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __param = (undefined && undefined.__param) || function (paramIndex, decorator) {
    return function (target, key) { decorator(target, key, paramIndex); }
};


var SessionService = /** @class */ (function () {
    function SessionService(storage) {
        this.storage = storage;
    }
    SessionService.prototype.setUserSession = function (userDetails) {
        var key = 'user';
        this.storage.set(key, userDetails);
        console.log(this.storage.get(key));
    };
    SessionService.prototype.getUserSession = function () {
        return this.storage.get('user');
    };
    SessionService.prototype.isSessionActive = function () {
        var currentUser = this.getUserSession();
        if (currentUser === null) {
            return false;
        }
        else {
            return true;
        }
    };
    SessionService.prototype.userLogOut = function () {
        this.storage.remove('user');
    };
    SessionService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])({
            providedIn: 'root'
        }),
        __param(0, Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Inject"])(angular_webstorage_service__WEBPACK_IMPORTED_MODULE_1__["SESSION_STORAGE"])),
        __metadata("design:paramtypes", [angular_webstorage_service__WEBPACK_IMPORTED_MODULE_1__["WebStorageService"]])
    ], SessionService);
    return SessionService;
}());



/***/ }),

/***/ "./src/app/structure/structure.component.css":
/*!***************************************************!*\
  !*** ./src/app/structure/structure.component.css ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3N0cnVjdHVyZS9zdHJ1Y3R1cmUuY29tcG9uZW50LmNzcyJ9 */"

/***/ }),

/***/ "./src/app/structure/structure.component.html":
/*!****************************************************!*\
  !*** ./src/app/structure/structure.component.html ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-login (loginEvent)=\"receiveLoginEvent($event)\" *ngIf=\"!isLoggedIn && routerConfig.login\"></app-login>\n<app-user *ngIf=\"routerConfig.dashboard && isLoggedIn\"></app-user>\n<app-about *ngIf=\"routerConfig.about && !isLoggedIn\"></app-about>\n<app-access *ngIf=\"routerConfig.getAccess && !isLoggedIn\"></app-access>\n\n"

/***/ }),

/***/ "./src/app/structure/structure.component.ts":
/*!**************************************************!*\
  !*** ./src/app/structure/structure.component.ts ***!
  \**************************************************/
/*! exports provided: StructureComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StructureComponent", function() { return StructureComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var StructureComponent = /** @class */ (function () {
    function StructureComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
        this.isLoggedIn = false;
        this.activeComponent = false;
        this.loginEvent = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.routerConfig = { about: false, getAccess: false, dashboard: false, login: false };
        this.getUser = this.sessionService.getUserSession();
    }
    StructureComponent.prototype.receiveLoginEvent = function ($event) {
        this.isLoggedIn = $event;
        this.customrouter();
        this.loginEvent.emit(this.isLoggedIn);
    };
    StructureComponent.prototype.ngOnInit = function () {
        this.customrouter();
    };
    StructureComponent.prototype.ngOnChanges = function (changes) {
        this.customrouter();
    };
    StructureComponent.prototype.customrouter = function () {
        if (this.router.url == "/") {
            if (this.isLoggedIn) {
                this.routerConfig = { about: false, getAccess: false, dashboard: true, login: false };
            }
            else {
                this.routerConfig = { about: false, getAccess: false, dashboard: false, login: true };
            }
        }
        else if (this.router.url == "/dashboard") {
            this.routerConfig = { about: false, getAccess: false, dashboard: true, login: false };
        }
        else if (this.router.url == "/about") {
            this.routerConfig = { about: true, getAccess: false, dashboard: false, login: false };
        }
        else if (this.router.url == "/getAccess") {
            this.routerConfig = { about: false, getAccess: true, dashboard: false, login: false };
        }
        if (this.getUser !== null && this.getUser.userlogged === true) {
            this.isLoggedIn = true;
        }
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], StructureComponent.prototype, "loginEvent", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Number)
    ], StructureComponent.prototype, "headerClick", void 0);
    StructureComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-structure',
            template: __webpack_require__(/*! ./structure.component.html */ "./src/app/structure/structure.component.html"),
            styles: [__webpack_require__(/*! ./structure.component.css */ "./src/app/structure/structure.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], StructureComponent);
    return StructureComponent;
}());



/***/ }),

/***/ "./src/app/teamhierarchy/teamhierarchy.component.css":
/*!***********************************************************!*\
  !*** ./src/app/teamhierarchy/teamhierarchy.component.css ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".example-tree-invisible {\r\n  display: none;\r\n}\r\n\r\n.example-tree ul,\r\n.example-tree li {\r\n  margin-top: 0;\r\n  margin-bottom: 0;\r\n  list-style-type: none;\r\n}\r\n\r\n.mat-tree{\r\n\tbackground: #efefef;\r\n    border: 1px solid #e0e0e0;\r\n}\r\n\r\n.mat-tree-node button{\r\n\tbackground:none;\r\n\tborder:none;\r\n\toutline:none;\r\n}\r\n\r\n.mat-tree-node{\r\n\tfont-size:12px;\r\n\tfont-family: 'Josefin Sans', sans-serif;\r\n}\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdGVhbWhpZXJhcmNoeS90ZWFtaGllcmFyY2h5LmNvbXBvbmVudC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxjQUFjO0NBQ2Y7O0FBRUQ7O0VBRUUsY0FBYztFQUNkLGlCQUFpQjtFQUNqQixzQkFBc0I7Q0FDdkI7O0FBQ0Q7Q0FDQyxvQkFBb0I7SUFDakIsMEJBQTBCO0NBQzdCOztBQUNEO0NBQ0MsZ0JBQWdCO0NBQ2hCLFlBQVk7Q0FDWixhQUFhO0NBQ2I7O0FBQ0Q7Q0FDQyxlQUFlO0NBQ2Ysd0NBQXdDO0NBQ3hDIiwiZmlsZSI6InNyYy9hcHAvdGVhbWhpZXJhcmNoeS90ZWFtaGllcmFyY2h5LmNvbXBvbmVudC5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuZXhhbXBsZS10cmVlLWludmlzaWJsZSB7XHJcbiAgZGlzcGxheTogbm9uZTtcclxufVxyXG5cclxuLmV4YW1wbGUtdHJlZSB1bCxcclxuLmV4YW1wbGUtdHJlZSBsaSB7XHJcbiAgbWFyZ2luLXRvcDogMDtcclxuICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gIGxpc3Qtc3R5bGUtdHlwZTogbm9uZTtcclxufVxyXG4ubWF0LXRyZWV7XHJcblx0YmFja2dyb3VuZDogI2VmZWZlZjtcclxuICAgIGJvcmRlcjogMXB4IHNvbGlkICNlMGUwZTA7XHJcbn1cclxuLm1hdC10cmVlLW5vZGUgYnV0dG9ue1xyXG5cdGJhY2tncm91bmQ6bm9uZTtcclxuXHRib3JkZXI6bm9uZTtcclxuXHRvdXRsaW5lOm5vbmU7XHJcbn1cclxuLm1hdC10cmVlLW5vZGV7XHJcblx0Zm9udC1zaXplOjEycHg7XHJcblx0Zm9udC1mYW1pbHk6ICdKb3NlZmluIFNhbnMnLCBzYW5zLXNlcmlmO1xyXG59Il19 */"

/***/ }),

/***/ "./src/app/teamhierarchy/teamhierarchy.component.html":
/*!************************************************************!*\
  !*** ./src/app/teamhierarchy/teamhierarchy.component.html ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<form [formGroup]=\"stateForm\">\n  <mat-form-field>\n    <span><i class=\"fa fa-search\"></i></span>&nbsp;<input type=\"text\" class=\"sel-team-cl\" matInput placeholder=\"Find another team\" formControlName=\"stateGroup\" required [matAutocomplete]=\"autoGroup\">\n      <mat-autocomplete #autoGroup=\"matAutocomplete\">\n        <mat-optgroup *ngFor=\"let group of stateGroupOptions | async\" [label]=\"group.letter\">\n          <mat-option *ngFor=\"let name of group.names\" [value]=\"name\">\n            {{name}}\n          </mat-option>\n      </mat-optgroup>\n    </mat-autocomplete>\n  </mat-form-field>\n</form>\n\n<div class=\"spacer\"></div>\n\n<!-- Copyright 2018 Google Inc. All Rights Reserved.\n    Use of this source code is governed by an MIT-style license that\n    can be found in the LICENSE file at http://angular.io/license -->\n<mat-tree [dataSource]=\"nestedDataSource\" [treeControl]=\"nestedTreeControl\" class=\"example-tree\">\n  <mat-tree-node *matTreeNodeDef=\"let node\" matTreeNodeToggle>\n    <li class=\"mat-tree-node\">\n      <button mat-icon-button disabled></button>\n      {{node.filename}}:  {{node.type}}\n    </li>\n  </mat-tree-node>\n\n  <mat-nested-tree-node *matTreeNodeDef=\"let node; when: hasNestedChild\">\n    <li>\n      <div class=\"mat-tree-node\">\n        <button mat-icon-button matTreeNodeToggle\n                [attr.aria-label]=\"'toggle ' + node.filename\">\n          <mat-icon class=\"mat-icon-rtl-mirror\">\n            {{nestedTreeControl.isExpanded(node) ? 'expand_more' : 'chevron_right'}}\n          </mat-icon>\n        </button>\n        {{node.filename}}\n      </div>\n      <ul [class.example-tree-invisible]=\"nestedTreeControl.isExpanded(node)\">\n        <ng-container matTreeNodeOutlet></ng-container>\n      </ul>\n    </li>\n  </mat-nested-tree-node>\n</mat-tree>\n\n\n<!-- Copyright 2018 Google Inc. All Rights Reserved.\n    Use of this source code is governed by an MIT-style license that\n    can be found in the LICENSE file at http://angular.io/license -->"

/***/ }),

/***/ "./src/app/teamhierarchy/teamhierarchy.component.ts":
/*!**********************************************************!*\
  !*** ./src/app/teamhierarchy/teamhierarchy.component.ts ***!
  \**********************************************************/
/*! exports provided: FileNode, _filter, FileDatabase, TeamhierarchyComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FileNode", function() { return FileNode; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "_filter", function() { return _filter; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FileDatabase", function() { return FileDatabase; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TeamhierarchyComponent", function() { return TeamhierarchyComponent; });
/* harmony import */ var _angular_cdk_tree__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/cdk/tree */ "./node_modules/@angular/cdk/esm5/tree.es5.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_material_tree__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/material/tree */ "./node_modules/@angular/material/esm5/tree.es5.js");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm5/operators/index.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};








var FileNode = /** @class */ (function () {
    function FileNode() {
    }
    return FileNode;
}());

var _filter = function (opt, value) {
    var filterValue = value.toLowerCase();
    return opt.filter(function (item) { return item.toLowerCase().indexOf(filterValue) === 0; });
};
/**
 * The Json tree data in string. The data could be parsed into Json object
 */
var TREE_DATA = JSON.stringify({
    FAS: {
        'Ashish Shivhare - AO Escalation Manager': {
            'Komal Sethi - AO Service Delivery Manager': {
                'Pawan Arya - FAS Domain Manager': {
                    'Aditi Chajerh - FAS Technology Lead': {
                        'Avneet Singh': 'SE',
                        'Mittu Anand': 'SE',
                        'Inderpal Singh': 'SE',
                        'Johnsia John': 'SE',
                        'Alok Juyal': 'SE',
                        'Manu Joy': 'SE',
                        'Subin Mathew': 'SE',
                        'Sonia Yadav': 'SE',
                        'Deepak Dash': 'SE',
                        'Sherin Mathew': 'SE'
                    }
                }
            }
        }
    }
});
var FileDatabase = /** @class */ (function () {
    function FileDatabase() {
        this.dataChange = new rxjs__WEBPACK_IMPORTED_MODULE_3__["BehaviorSubject"]([]);
        this.initialize();
    }
    Object.defineProperty(FileDatabase.prototype, "data", {
        get: function () { return this.dataChange.value; },
        enumerable: true,
        configurable: true
    });
    FileDatabase.prototype.initialize = function () {
        // Parse the string to json object.
        var dataObject = JSON.parse(TREE_DATA);
        // Build the tree nodes from Json object. The result is a list of `FileNode` with nested
        //     file node as children.
        var data = this.buildFileTree(dataObject, 0);
        // Notify the change.
        this.dataChange.next(data);
    };
    /**
     * Build the file structure tree. The `value` is the Json object, or a sub-tree of a Json object.
     * The return value is the list of `FileNode`.
     */
    FileDatabase.prototype.buildFileTree = function (obj, level) {
        var _this = this;
        return Object.keys(obj).reduce(function (accumulator, key) {
            var value = obj[key];
            var node = new FileNode();
            node.filename = key;
            if (value != null) {
                if (typeof value === 'object') {
                    node.children = _this.buildFileTree(value, level + 1);
                }
                else {
                    node.type = value;
                }
            }
            return accumulator.concat(node);
        }, []);
    };
    return FileDatabase;
}());

var TeamhierarchyComponent = /** @class */ (function () {
    function TeamhierarchyComponent(sessionService, router, database, fb) {
        var _this = this;
        this.sessionService = sessionService;
        this.router = router;
        this.database = database;
        this.fb = fb;
        this.stateForm = this.fb.group({
            stateGroup: '',
        });
        this.stateGroups = [{
                letter: 'A',
                names: ['Alabama', 'Alaska', 'Arizona', 'Arkansas']
            }, {
                letter: 'C',
                names: ['California', 'Colorado', 'Connecticut']
            }, {
                letter: 'D',
                names: ['Delaware']
            }, {
                letter: 'F',
                names: ['Florida']
            }, {
                letter: 'G',
                names: ['Georgia']
            }, {
                letter: 'H',
                names: ['Hawaii']
            }, {
                letter: 'I',
                names: ['Idaho', 'Illinois', 'Indiana', 'Iowa']
            }, {
                letter: 'K',
                names: ['Kansas', 'Kentucky']
            }, {
                letter: 'L',
                names: ['Louisiana']
            }, {
                letter: 'M',
                names: ['Maine', 'Maryland', 'Massachusetts', 'Michigan',
                    'Minnesota', 'Mississippi', 'Missouri', 'Montana']
            }, {
                letter: 'N',
                names: ['Nebraska', 'Nevada', 'New Hampshire', 'New Jersey',
                    'New Mexico', 'New York', 'North Carolina', 'North Dakota']
            }, {
                letter: 'O',
                names: ['Ohio', 'Oklahoma', 'Oregon']
            }, {
                letter: 'P',
                names: ['Pennsylvania']
            }, {
                letter: 'R',
                names: ['Rhode Island']
            }, {
                letter: 'S',
                names: ['South Carolina', 'South Dakota']
            }, {
                letter: 'T',
                names: ['Tennessee', 'Texas']
            }, {
                letter: 'U',
                names: ['Utah']
            }, {
                letter: 'V',
                names: ['Vermont', 'Virginia']
            }, {
                letter: 'W',
                names: ['Washington', 'West Virginia', 'Wisconsin', 'Wyoming']
            }];
        this.hasNestedChild = function (_, nodeData) { return !nodeData.type; };
        this._getChildren = function (node) { return node.children; };
        this.nestedTreeControl = new _angular_cdk_tree__WEBPACK_IMPORTED_MODULE_0__["NestedTreeControl"](this._getChildren);
        this.nestedDataSource = new _angular_material_tree__WEBPACK_IMPORTED_MODULE_2__["MatTreeNestedDataSource"]();
        database.dataChange.subscribe(function (data) { return _this.nestedDataSource.data = data; });
    }
    TeamhierarchyComponent.prototype._filterGroup = function (value) {
        if (value) {
            return this.stateGroups
                .map(function (group) { return ({ letter: group.letter, names: _filter(group.names, value) }); })
                .filter(function (group) { return group.names.length > 0; });
        }
        return this.stateGroups;
    };
    TeamhierarchyComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.stateGroupOptions = this.stateForm.get('stateGroup').valueChanges
            .pipe(Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_7__["startWith"])(''), Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_7__["map"])(function (value) { return _this._filterGroup(value); }));
        if (!this.sessionService.isSessionActive()) {
            this.router.navigate(['/']);
        }
    };
    TeamhierarchyComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-teamhierarchy',
            template: __webpack_require__(/*! ./teamhierarchy.component.html */ "./src/app/teamhierarchy/teamhierarchy.component.html"),
            styles: [__webpack_require__(/*! ./teamhierarchy.component.css */ "./src/app/teamhierarchy/teamhierarchy.component.css")],
            providers: [FileDatabase]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_4__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], FileDatabase, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormBuilder"]])
    ], TeamhierarchyComponent);
    return TeamhierarchyComponent;
}());



/***/ }),

/***/ "./src/app/timeline/timeline.component.css":
/*!*************************************************!*\
  !*** ./src/app/timeline/timeline.component.css ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".circle {\r\n  padding: 13px 20px;\r\n  border-radius: 50%;\r\n  background-color: #ED8D8D;\r\n  color: #fff;\r\n  max-height: 50px;\r\n  z-index: 2;\r\n}\r\n\r\n.how-it-works.row .col-2 {\r\n  align-self: stretch;\r\n}\r\n\r\n.how-it-works.row .col-2::after {\r\n  content: \"\";\r\n  position: absolute;\r\n  border-left: 3px solid #ED8D8D;\r\n  z-index: 1;\r\n}\r\n\r\n.how-it-works.row .col-2.bottom::after {\r\n  height: 50%;\r\n  left: 50%;\r\n  top: 50%;\r\n}\r\n\r\n.how-it-works.row .col-2.full::after {\r\n  height: 100%;\r\n  left: calc(50% - 3px);\r\n}\r\n\r\n.how-it-works.row .col-2.top::after {\r\n  height: 50%;\r\n  left: 50%;\r\n  top: 0;\r\n}\r\n\r\n.timeline div {\r\n  padding: 0;\r\n  height: 40px;\r\n}\r\n\r\n.timeline hr {\r\n  border-top: 3px solid #ED8D8D;\r\n  margin: 0;\r\n  top: 17px;\r\n  position: relative;\r\n}\r\n\r\n.timeline .col-2 {\r\n  display: flex;\r\n  overflow: hidden;\r\n}\r\n\r\n.timeline .corner {\r\n  border: 3px solid #ED8D8D;\r\n  width: 100%;\r\n  position: relative;\r\n  border-radius: 15px;\r\n}\r\n\r\n.timeline .top-right {\r\n  left: 50%;\r\n  top: -50%;\r\n}\r\n\r\n.timeline .left-bottom {\r\n  left: -50%;\r\n  top: calc(50% - 3px);\r\n}\r\n\r\n.timeline .top-left {\r\n  left: -50%;\r\n  top: -50%;\r\n}\r\n\r\n.timeline .right-bottom {\r\n  left: 50%;\r\n  top: calc(50% - 3px);\r\n}\r\n\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdGltZWxpbmUvdGltZWxpbmUuY29tcG9uZW50LmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLG1CQUFtQjtFQUNuQixtQkFBbUI7RUFDbkIsMEJBQTBCO0VBQzFCLFlBQVk7RUFDWixpQkFBaUI7RUFDakIsV0FBVztDQUNaOztBQUVEO0VBQ0Usb0JBQW9CO0NBQ3JCOztBQUNEO0VBQ0UsWUFBWTtFQUNaLG1CQUFtQjtFQUNuQiwrQkFBK0I7RUFDL0IsV0FBVztDQUNaOztBQUNEO0VBQ0UsWUFBWTtFQUNaLFVBQVU7RUFDVixTQUFTO0NBQ1Y7O0FBQ0Q7RUFDRSxhQUFhO0VBQ2Isc0JBQXNCO0NBQ3ZCOztBQUNEO0VBQ0UsWUFBWTtFQUNaLFVBQVU7RUFDVixPQUFPO0NBQ1I7O0FBR0Q7RUFDRSxXQUFXO0VBQ1gsYUFBYTtDQUNkOztBQUNEO0VBQ0UsOEJBQThCO0VBQzlCLFVBQVU7RUFDVixVQUFVO0VBQ1YsbUJBQW1CO0NBQ3BCOztBQUNEO0VBQ0UsY0FBYztFQUNkLGlCQUFpQjtDQUNsQjs7QUFDRDtFQUNFLDBCQUEwQjtFQUMxQixZQUFZO0VBQ1osbUJBQW1CO0VBQ25CLG9CQUFvQjtDQUNyQjs7QUFDRDtFQUNFLFVBQVU7RUFDVixVQUFVO0NBQ1g7O0FBQ0Q7RUFDRSxXQUFXO0VBQ1gscUJBQXFCO0NBQ3RCOztBQUNEO0VBQ0UsV0FBVztFQUNYLFVBQVU7Q0FDWDs7QUFDRDtFQUNFLFVBQVU7RUFDVixxQkFBcUI7Q0FDdEIiLCJmaWxlIjoic3JjL2FwcC90aW1lbGluZS90aW1lbGluZS5jb21wb25lbnQuY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmNpcmNsZSB7XHJcbiAgcGFkZGluZzogMTNweCAyMHB4O1xyXG4gIGJvcmRlci1yYWRpdXM6IDUwJTtcclxuICBiYWNrZ3JvdW5kLWNvbG9yOiAjRUQ4RDhEO1xyXG4gIGNvbG9yOiAjZmZmO1xyXG4gIG1heC1oZWlnaHQ6IDUwcHg7XHJcbiAgei1pbmRleDogMjtcclxufVxyXG5cclxuLmhvdy1pdC13b3Jrcy5yb3cgLmNvbC0yIHtcclxuICBhbGlnbi1zZWxmOiBzdHJldGNoO1xyXG59XHJcbi5ob3ctaXQtd29ya3Mucm93IC5jb2wtMjo6YWZ0ZXIge1xyXG4gIGNvbnRlbnQ6IFwiXCI7XHJcbiAgcG9zaXRpb246IGFic29sdXRlO1xyXG4gIGJvcmRlci1sZWZ0OiAzcHggc29saWQgI0VEOEQ4RDtcclxuICB6LWluZGV4OiAxO1xyXG59XHJcbi5ob3ctaXQtd29ya3Mucm93IC5jb2wtMi5ib3R0b206OmFmdGVyIHtcclxuICBoZWlnaHQ6IDUwJTtcclxuICBsZWZ0OiA1MCU7XHJcbiAgdG9wOiA1MCU7XHJcbn1cclxuLmhvdy1pdC13b3Jrcy5yb3cgLmNvbC0yLmZ1bGw6OmFmdGVyIHtcclxuICBoZWlnaHQ6IDEwMCU7XHJcbiAgbGVmdDogY2FsYyg1MCUgLSAzcHgpO1xyXG59XHJcbi5ob3ctaXQtd29ya3Mucm93IC5jb2wtMi50b3A6OmFmdGVyIHtcclxuICBoZWlnaHQ6IDUwJTtcclxuICBsZWZ0OiA1MCU7XHJcbiAgdG9wOiAwO1xyXG59XHJcblxyXG5cclxuLnRpbWVsaW5lIGRpdiB7XHJcbiAgcGFkZGluZzogMDtcclxuICBoZWlnaHQ6IDQwcHg7XHJcbn1cclxuLnRpbWVsaW5lIGhyIHtcclxuICBib3JkZXItdG9wOiAzcHggc29saWQgI0VEOEQ4RDtcclxuICBtYXJnaW46IDA7XHJcbiAgdG9wOiAxN3B4O1xyXG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxufVxyXG4udGltZWxpbmUgLmNvbC0yIHtcclxuICBkaXNwbGF5OiBmbGV4O1xyXG4gIG92ZXJmbG93OiBoaWRkZW47XHJcbn1cclxuLnRpbWVsaW5lIC5jb3JuZXIge1xyXG4gIGJvcmRlcjogM3B4IHNvbGlkICNFRDhEOEQ7XHJcbiAgd2lkdGg6IDEwMCU7XHJcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xyXG4gIGJvcmRlci1yYWRpdXM6IDE1cHg7XHJcbn1cclxuLnRpbWVsaW5lIC50b3AtcmlnaHQge1xyXG4gIGxlZnQ6IDUwJTtcclxuICB0b3A6IC01MCU7XHJcbn1cclxuLnRpbWVsaW5lIC5sZWZ0LWJvdHRvbSB7XHJcbiAgbGVmdDogLTUwJTtcclxuICB0b3A6IGNhbGMoNTAlIC0gM3B4KTtcclxufVxyXG4udGltZWxpbmUgLnRvcC1sZWZ0IHtcclxuICBsZWZ0OiAtNTAlO1xyXG4gIHRvcDogLTUwJTtcclxufVxyXG4udGltZWxpbmUgLnJpZ2h0LWJvdHRvbSB7XHJcbiAgbGVmdDogNTAlO1xyXG4gIHRvcDogY2FsYyg1MCUgLSAzcHgpO1xyXG59XHJcbiJdfQ== */"

/***/ }),

/***/ "./src/app/timeline/timeline.component.html":
/*!**************************************************!*\
  !*** ./src/app/timeline/timeline.component.html ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "  <div class=\"container\">\n    <h2 class=\"pb-3 pt-2 border-bottom mb-5\">Vertical Left-Right Timeline</h2>\n    <!--first section-->\n    <div class=\"row align-items-center how-it-works d-flex\">\n      <div class=\"col-2 text-center bottom d-inline-flex justify-content-center align-items-center\">\n        <div class=\"circle font-weight-bold\">1</div>\n      </div>\n      <div class=\"col-6\">\n        <h5>Fully Responsive</h5>\n        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>\n      </div>\n    </div>\n    <!--path between 1-2-->\n    <div class=\"row timeline\">\n      <div class=\"col-2\">\n        <div class=\"corner top-right\"></div>\n      </div>\n      <div class=\"col-8\">\n        <hr/>\n      </div>\n      <div class=\"col-2\">\n        <div class=\"corner left-bottom\"></div>\n      </div>\n    </div>\n    <!--second section-->\n    <div class=\"row align-items-center justify-content-end how-it-works d-flex\">\n      <div class=\"col-6 text-right\">\n        <h5>Using Bootstrap</h5>\n        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>\n      </div>\n      <div class=\"col-2 text-center full d-inline-flex justify-content-center align-items-center\">\n        <div class=\"circle font-weight-bold\">2</div>\n      </div>\n    </div>\n    <!--path between 2-3-->\n    <div class=\"row timeline\">\n      <div class=\"col-2\">\n        <div class=\"corner right-bottom\"></div>\n      </div>\n      <div class=\"col-8\">\n        <hr/>\n      </div>\n      <div class=\"col-2\">\n        <div class=\"corner top-left\"></div>\n      </div>\n    </div>\n    <!--third section-->\n    <div class=\"row align-items-center how-it-works d-flex\">\n      <div class=\"col-2 text-center top d-inline-flex justify-content-center align-items-center\">\n        <div class=\"circle font-weight-bold\">3</div>\n      </div>\n      <div class=\"col-6\">\n        <h5>Now with Pug and Sass</h5>\n        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>\n      </div>\n    </div>\n  </div>"

/***/ }),

/***/ "./src/app/timeline/timeline.component.ts":
/*!************************************************!*\
  !*** ./src/app/timeline/timeline.component.ts ***!
  \************************************************/
/*! exports provided: TimelineComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TimelineComponent", function() { return TimelineComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var TimelineComponent = /** @class */ (function () {
    function TimelineComponent() {
    }
    TimelineComponent.prototype.ngOnInit = function () {
    };
    TimelineComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-timeline',
            template: __webpack_require__(/*! ./timeline.component.html */ "./src/app/timeline/timeline.component.html"),
            styles: [__webpack_require__(/*! ./timeline.component.css */ "./src/app/timeline/timeline.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], TimelineComponent);
    return TimelineComponent;
}());



/***/ }),

/***/ "./src/app/user/user.component.css":
/*!*****************************************!*\
  !*** ./src/app/user/user.component.css ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3VzZXIvdXNlci5jb21wb25lbnQuY3NzIn0= */"

/***/ }),

/***/ "./src/app/user/user.component.html":
/*!******************************************!*\
  !*** ./src/app/user/user.component.html ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"col-sm-12\">\n<div class=\"row\">\n\t<div class=\"col-sm-2 user-right-pane\">\n\t\t<ul class=\"user-menu\">\n\t\t    <li><a routerLink=\"/dashboard/timeline\" (click)=\"switchDash();\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"> </i> Timeline</a></li>\n\t\t\t<li><a routerLink=\"/dashboard/apps\" (click)=\"switchDash();\"><i class=\"fa fa-list-ul\" aria-hidden=\"true\"> </i> App links</a></li>\n\t\t\t<li><a routerLink=\"/dashboard/dllists\" (click)=\"switchDash();\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"> </i> DL lists</a></li>\n\t\t\t<li><a routerLink=\"/dashboard/servers\" (click)=\"switchDash();\"><i class=\"fa fa-server\" aria-hidden=\"true\"> </i> Server lists</a></li>\n\t\t\t<li><a routerLink=\"/dashboard/vendor\" (click)=\"switchDash();\"><i class=\"fa fa-id-card-o\" aria-hidden=\"true\"> </i> Vendor Contracts</a></li>\n\t\t\t<li class=\"user-menu-li-last\"><a routerLink=\"/dashboard/team\" (click)=\"switchDash();\"><i class=\"fa fa-sitemap\" aria-hidden=\"true\"> </i> Team hierarchy</a></li>\n\t\t</ul>\n\t</div>\n\t<div class=\"col-sm-10 user-right-pane\">\n\t<div class=\"spacer\"></div>\n\t\t<!-- <app-applinks *ngIf=\"routerConfigDashboard.apps\"></app-applinks>\n\t\t<app-dllists *ngIf=\"routerConfigDashboard.dllinks\"></app-dllists>\n\t\t<app-serverlist *ngIf=\"routerConfigDashboard.serverlist\"></app-serverlist>\n\t\t<app-teamhierarchy *ngIf=\"routerConfigDashboard.team\"></app-teamhierarchy> -->\n\t\t<router-outlet></router-outlet>\n\t\t<div class=\"spacer\"></div>\n\t\t\n\t</div>\n</div>\n</div>\n"

/***/ }),

/***/ "./src/app/user/user.component.ts":
/*!****************************************!*\
  !*** ./src/app/user/user.component.ts ***!
  \****************************************/
/*! exports provided: UserComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UserComponent", function() { return UserComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var UserComponent = /** @class */ (function () {
    function UserComponent(router) {
        this.router = router;
        this.routerConfigDashboard = { apps: false, dllinks: false, serverlist: false, team: false };
    }
    UserComponent.prototype.ngOnInit = function () {
        //this.dashboardCustomrouter();
    };
    UserComponent.prototype.switchDash = function (url) {
        // this.dashboardCustomrouter();
    };
    UserComponent.prototype.dashboardCustomrouter = function () {
        if (this.router.url == "/dashboard/apps" || this.router.url == "/dashboard" || this.router.url == "/") {
            this.routerConfigDashboard = { apps: true, dllinks: false, serverlist: false, team: false };
        }
        else if (this.router.url == "/dashboard/dllists") {
            this.routerConfigDashboard = { apps: false, dllinks: true, serverlist: false, team: false };
        }
        else if (this.router.url == "/dashboard/servers") {
            this.routerConfigDashboard = { apps: false, dllinks: false, serverlist: true, team: false };
        }
        else if (this.router.url == "/dashboard/team") {
            this.routerConfigDashboard = { apps: false, dllinks: false, serverlist: false, team: true };
        }
    };
    UserComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-user',
            template: __webpack_require__(/*! ./user.component.html */ "./src/app/user/user.component.html"),
            styles: [__webpack_require__(/*! ./user.component.css */ "./src/app/user/user.component.css")]
        }),
        __metadata("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_1__["Router"]])
    ], UserComponent);
    return UserComponent;
}());



/***/ }),

/***/ "./src/app/vendor/vendor.component.css":
/*!*********************************************!*\
  !*** ./src/app/vendor/vendor.component.css ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "table {\r\n  width: 100%;\r\n}\r\n\r\n.mat-form-field {\r\n  font-size: 14px;\r\n  width: 100%;\r\n}\r\n\r\ntd, th {\r\n  width: 25%;\r\n}\r\n\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdmVuZG9yL3ZlbmRvci5jb21wb25lbnQuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsWUFBWTtDQUNiOztBQUVEO0VBQ0UsZ0JBQWdCO0VBQ2hCLFlBQVk7Q0FDYjs7QUFFRDtFQUNFLFdBQVc7Q0FDWiIsImZpbGUiOiJzcmMvYXBwL3ZlbmRvci92ZW5kb3IuY29tcG9uZW50LmNzcyIsInNvdXJjZXNDb250ZW50IjpbInRhYmxlIHtcclxuICB3aWR0aDogMTAwJTtcclxufVxyXG5cclxuLm1hdC1mb3JtLWZpZWxkIHtcclxuICBmb250LXNpemU6IDE0cHg7XHJcbiAgd2lkdGg6IDEwMCU7XHJcbn1cclxuXHJcbnRkLCB0aCB7XHJcbiAgd2lkdGg6IDI1JTtcclxufVxyXG4iXX0= */"

/***/ }),

/***/ "./src/app/vendor/vendor.component.html":
/*!**********************************************!*\
  !*** ./src/app/vendor/vendor.component.html ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<span><i class=\"fa fa-search\"></i></span>&nbsp; <input  placeholder=\"Find a vendor\" class=\"dt-table-filter-inpt sel-team-cl\">\n<div class=\"col-sm-10\">\n\n<div class=\"btn-group pull-right\" role=\"group\" aria-label=\"Quick Links\">\n  <button type=\"button\" (click)=\"vendorExpiryFilter('all')\" class=\"btn btn-sm btn-info\">All</button>\n  <button type=\"button\" (click)=\"vendorExpiryFilter('expired')\" class=\"btn btn-sm btn-danger\">Expired</button>\n  <button type=\"button\" (click)=\"vendorExpiryFilter('near')\" class=\"btn btn-sm btn-warning\">Nearing Expiry</button>\n  <button type=\"button\" (click)=\"vendorExpiryFilter('support')\" class=\"btn btn-sm btn-success\">In Support</button>\n</div>\n</div>\n\n\n<div class=\"spacer\"></div>\n<div class=\"row m-l\">\n<div class=\"col-sm-5 vendor-block mat-elevation-z8 vendor-col-blk \" *ngFor=\"let k of objectKeys(dataSource)\">\n<dl class=\"row\">\n<div class=\"col-sm-12 row\">\n  <div class=\"col-sm-3\">Vendor</div>\n  <dt class=\"col-sm-9\"><span class=\"text-red\">{{dataSource.data[k].vendor}}</span>\n<span class=\"label label-cl pull-right\" [ngClass]=\"dataSource.data[k].expiry\"><i class=\"fa\" [ngClass]=\"getValidityIcon(dataSource.data[k].expiry)\" aria-hidden=\"true\"></i></span>\n<span class=\"pull-right label-cl-ds\">{{dataSource.data[k].days}}</span>\n</dt>\n</div>\n<hr>\n  <dd class=\"col-sm-3\">Application</dd>\n  <dt class=\"col-sm-9\">{{dataSource.data[k].application}}\n  </dt>\n\n  <dd class=\"col-sm-3\">Type</dd>\n  <dd class=\"col-sm-9\">{{dataSource.data[k].type}}</dd>\n\n  <dd class=\"col-sm-3 text-truncate\">POC</dd>\n  <dd class=\"col-sm-9\">{{dataSource.data[k].name}}</dd>\n   \n  <dd class=\"col-sm-3 text-truncate\">Start Date</dd>\n  <dd class=\"col-sm-9\">{{dataSource.data[k].start}}</dd>\n  <dd class=\"col-sm-3\">Expiry Date</dd>\n  <dd class=\"col-sm-9\">{{dataSource.data[k].end}}</dd>\n  <dd class=\"col-sm-3\">Contacts</dd>\n  <dd class=\"col-sm-9\">\n{{dataSource.data[k].number}}/{{dataSource.data[k].email}}\n    \n  </dd>\n\n</dl>\n   <h3> </h3>\n<p></p>\n\n</div>\n</div>\n\n<!-- Copyright 2018 Google Inc. All Rights Reserved.\n    Use of this source code is governed by an MIT-style license that\n    can be found in the LICENSE file at http://angular.io/license -->"

/***/ }),

/***/ "./src/app/vendor/vendor.component.ts":
/*!********************************************!*\
  !*** ./src/app/vendor/vendor.component.ts ***!
  \********************************************/
/*! exports provided: VendorComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "VendorComponent", function() { return VendorComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _session_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../session.service */ "./src/app/session.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var VendorComponent = /** @class */ (function () {
    function VendorComponent(sessionService, router) {
        this.sessionService = sessionService;
        this.router = router;
        this.displayedColumns = ['vendor', 'application', 'type', 'start', 'end', 'number', 'name', 'email', 'expiry', 'days'];
        // Create 100 users
        var users = [
            { vendor: 'MailChimp', application: 'TEEP', type: 'Hardware', start: '2007-12-24', end: '2027-12-08', number: '912375774', name: 'Tom Kyles', email: 'tk@domain.com', expiry: 'bg-danger' },
            { vendor: 'Cisco', application: 'SAP', type: 'Hardware', start: '2007-12-24', end: '2018-12-08', number: '324324', name: 'Xkys', email: 'xt@hjksd.com', expiry: 'bg-danger' },
            { vendor: 'Roundcube', application: 'MailME', type: 'Software', start: '2007-12-24', end: '2017-12-08', number: '324324', name: 'Xkys', email: 'xt@hjksd.com', expiry: 'bg-warning' },
            { vendor: 'Lampstack', application: 'EasyCRM', type: 'Other', start: '2007-12-24', end: '2018-11-18', number: '324324', name: 'Xkys', email: 'xt@hjksd.com', expiry: 'bg-warning' },
            { vendor: 'TIBCO', application: 'TypeCast', type: 'Hardware', start: '2007-12-247', end: '2023-12-08', number: '324324', name: 'Xkys', email: 'xt@hjksd.com', expiry: 'bg-warning' },
            { vendor: 'SIEBEL', application: 'Prom', type: 'Software', start: '2007-12-24', end: '2012-12-08', number: '324324', name: 'Xkys', email: 'xt@hjksd.com', expiry: 'bg-success' },
            { vendor: 'MATRIX', application: 'Quicke', type: 'Hardware', start: '2007-12-24', end: '2018-12-29', number: '324324', name: 'Xkys', email: 'xt@hjksd.com', expiry: 'bg-success' }
        ];
        // Assign the data to the data source for the table to render
        var dateProcessedUsers = this.setExpiry(users);
        this.dataSource = new _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatTableDataSource"](dateProcessedUsers);
        this.filterData = this.setExpiry(dateProcessedUsers);
    }
    VendorComponent.prototype.vendorExpiryFilter = function (expiry) {
        if (expiry === 'expired') {
            this.dataSource.data = this.filterVendorData('bg-danger');
        }
        else if (expiry === 'near') {
            this.dataSource.data = this.filterVendorData('bg-warning');
        }
        else if (expiry === 'support') {
            this.dataSource.data = this.filterVendorData('bg-success');
        }
        else {
            this.dataSource.data = this.filterData;
        }
    };
    VendorComponent.prototype.setExpiry = function (users) {
        console.log(users[0].end);
        var currentDate = new Date().toISOString().slice(0, 10);
        currentDate = Date.parse(currentDate);
        for (var i = 0; i < users.length; i++) {
            var expiryDate = new Date(users[i].end).toISOString().slice(0, 10);
            expiryDate = Date.parse(expiryDate);
            var dateDiff = expiryDate - currentDate;
            var minutesPerDay = 60 * 24;
            var seconds = dateDiff / 1000;
            var totalMinutes = seconds / 60;
            var days = totalMinutes / minutesPerDay;
            if (days < 0) {
                users[i].expiry = 'bg-danger';
                users[i].days = Math.abs(days) + ' days since expired ';
            }
            else if (days >= 0 && days <= 60) {
                users[i].expiry = 'bg-warning';
                users[i].days = Math.abs(days) + ' days to expiry ';
            }
            else if (days > 60) {
                users[i].expiry = 'bg-success';
                users[i].days = '';
            }
        }
        return users;
    };
    VendorComponent.prototype.filterVendorData = function (expiry) {
        var vendorFilterArray = [];
        for (var i = 0; i < this.filterData.length; i++) {
            if (this.filterData[i].expiry === expiry) {
                vendorFilterArray.push(this.filterData[i]);
            }
        }
        return vendorFilterArray;
    };
    VendorComponent.prototype.ngOnInit = function () {
        if (!this.sessionService.isSessionActive()) {
            this.router.navigate(['/']);
        }
        else {
            this.dataSource.paginator = this.paginator;
            this.dataSource.sort = this.sort;
        }
    };
    VendorComponent.prototype.getValidityIcon = function (expiry) {
        if (expiry === 'bg-danger') {
            return 'fa-times-rectangle-o';
        }
        else if (expiry === 'bg-success') {
            return 'fa-check-circle';
        }
        else {
            return 'fa-warning';
        }
    };
    VendorComponent.prototype.objectKeys = function (obj) {
        return Object.keys(obj.data);
    };
    VendorComponent.prototype.applyFilter = function (filterValue) {
        console.log(this.dataSource.data);
        this.dataSource.filter = filterValue.trim().toLowerCase();
        if (this.dataSource.paginator) {
            this.dataSource.paginator.firstPage();
        }
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatPaginator"])
    ], VendorComponent.prototype, "paginator", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatSort"])
    ], VendorComponent.prototype, "sort", void 0);
    VendorComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-vendor',
            template: __webpack_require__(/*! ./vendor.component.html */ "./src/app/vendor/vendor.component.html"),
            styles: [__webpack_require__(/*! ./vendor.component.css */ "./src/app/vendor/vendor.component.css")]
        }),
        __metadata("design:paramtypes", [_session_service__WEBPACK_IMPORTED_MODULE_1__["SessionService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
    ], VendorComponent);
    return VendorComponent;
}());



/***/ }),

/***/ "./src/environments/environment.ts":
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.
var environment = {
    production: false
};
/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ "./src/main.ts":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var hammerjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! hammerjs */ "./node_modules/hammerjs/hammer.js");
/* harmony import */ var hammerjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(hammerjs__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/platform-browser-dynamic */ "./node_modules/@angular/platform-browser-dynamic/fesm5/platform-browser-dynamic.js");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./app/app.module */ "./src/app/app.module.ts");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./environments/environment */ "./src/environments/environment.ts");





if (_environments_environment__WEBPACK_IMPORTED_MODULE_4__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["enableProdMode"])();
}
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_2__["platformBrowserDynamic"])().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_3__["AppModule"])
    .catch(function (err) { return console.error(err); });


/***/ }),

/***/ 0:
/*!***************************!*\
  !*** multi ./src/main.ts ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\x230\easysupport\src\main.ts */"./src/main.ts");


/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main.js.map