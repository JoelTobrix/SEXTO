"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var _a;
Object.defineProperty(exports, "__esModule", { value: true });
exports.ProveedorService = void 0;
const http_1 = require("@angular/common/http");
const core_1 = require("@angular/core");
let ProveedorService = class ProveedorService {
    constructor(lector) {
        this.lector = lector;
        this.apiurl = 'http://localhost/sexto/Proyectos/03MVC/controllers/proveedores.controller.php?op=';
    }
    todos() {
        return this.lector.get(this.apiurl + 'todos');
    }
    eliminar(idProveedor) {
        const formData = new FormData();
        formData.append('idProveedores', idProveedor.toString());
        return this.lector.post(this.apiurl + 'eliminar', formData);
    }
};
exports.ProveedorService = ProveedorService;
exports.ProveedorService = ProveedorService = __decorate([
    (0, core_1.Injectable)({
        providedIn: 'root',
    }),
    __metadata("design:paramtypes", [typeof (_a = typeof http_1.HttpClient !== "undefined" && http_1.HttpClient) === "function" ? _a : Object])
], ProveedorService);
//# sourceMappingURL=proveedor.service.js.map