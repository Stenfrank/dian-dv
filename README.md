<img src="https://soenac.com/wp-content/uploads/2019/11/SOENAC_EMAIL.png">

## Acerca SOENAC S.A.S

SOENAC es un equipo de profesionales diseñado para atender cada una de sus necesidades y transformarlas en soluciones de acuerdo a la idea de negocio:

##### Software
- [Facturación electrónica.](https://soenac.com/servicio-y-productos/)
- [Implementación de factura electrónica.](https://soenac.com/servicio-y-productos/)
- [Administración de servidores.](https://soenac.com/servicio-y-productos/)
- [Mantenimiento y soporte.](https://soenac.com/servicio-y-productos/)

##### Asesoría Contable y Fiscal
- [Revisoria Fiscal.](https://soenac.com/servicio-y-productos/)
- [Implementación de NIIF.](https://soenac.com/servicio-y-productos/)
- [Auditoría de Sistemas y contable.](https://soenac.com/servicio-y-productos/)
- [Asesoria contable.](https://soenac.com/servicio-y-productos/)

## Acerca de

Libreria para calcular o validar el dígito de verificación de un nit para Colombia DIAN.

## Cómo instalar

Instalar con [`composer.phar`](http://getcomposer.org).

```sh
composer require stenfrank/dian-dv
```

## Uso básico

### Obtener digito de verificación

```php

use Stenfrank\DianDV\Facades\DV;

DV::getDV(901210113); // 3

```

### Validar digito de verificación

```php

use Stenfrank\DianDV\Facades\DV;

DV::check('9012101133'); // true
DV::check('901210113-3'); // true
DV::check('9012101138'); // false
DV::check('901210113-8'); // false
DV::check(' 9012101133 '); // true
DV::check('901210113/3', '/'); // true
DV::check('901210113*8', '*'); // false

```

## Vulnerabilidades de seguridad

Si descubres una vulnerabilidad de seguridad dentro del la librería, enviamos un correo electrónico a Frank Aguirre a través de [faguirre@soenac.com](mailto:faguirre@soenac.com). Todas las vulnerabilidades de seguridad serán tratadas con prontitud.

## Licencia

El marco del librería es un software de código abierto con licencia [MIT](https://opensource.org/licenses/MIT).
