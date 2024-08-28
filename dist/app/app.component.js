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
Object.defineProperty(exports, "__esModule", { value: true });
exports.AppComponent = void 0;
const core_1 = require("@angular/core");
const router_1 = require("@angular/router");
const proveedor_service_1 = require("./Services/proveedor.service");
let AppComponent = class AppComponent {
    constructor(ServicioProveedor) {
        this.ServicioProveedor = ServicioProveedor;
        this.title = 'Lista de Proveedores';
        this.listaProveedores = [];
    }
    ngOnInit() {
        this.cargatabla();
    }
    cargatabla() {
        this.ServicioProveedor.todos().subscribe((data) => {
            this.listaProveedores = data;
        });
    }
    eliminar(idProveedor) {
        this.ServicioProveedor.eliminar(idProveedor).subscribe((data) => {
            console.log(data);
            this.cargatabla();
        });
    }
};
exports.AppComponent = AppComponent;
exports.AppComponent = AppComponent = __decorate([
    (0, core_1.Component)({
        selector: 'app-root',
        standalone: true,
        imports: [router_1.RouterOutlet],
        templateUrl: './app.component.html',
        styleUrl: './app.component.css',
    }),
    __metadata("design:paramtypes", [proveedor_service_1.ProveedorService])
], AppComponent);
//# sourceMappingURL=app.component.js.map