import { ProveedorService } from './Services/proveedor.service';
import { Iproveedor } from './Interfaces/iproveedor';
export declare class AppComponent {
    private ServicioProveedor;
    title: string;
    listaProveedores: Iproveedor[];
    constructor(ServicioProveedor: ProveedorService);
    ngOnInit(): void;
    cargatabla(): void;
    eliminar(idProveedor: number): void;
}
