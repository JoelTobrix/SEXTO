import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Iproveedor } from '../Interfaces/iproveedor';
export declare class ProveedorService {
    private lector;
    apiurl: string;
    constructor(lector: HttpClient);
    todos(): Observable<Iproveedor[]>;
    eliminar(idProveedor: number): Observable<number>;
}
