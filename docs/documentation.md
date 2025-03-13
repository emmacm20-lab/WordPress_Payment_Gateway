# 📂 docs/README.md - Documentación del Proyecto
"""
# 💳 Plataforma de Pagos con WordPress y Sinpe Móvil

## 📌 Descripción del Proyecto

Este proyecto implementa una **plataforma de pagos en WordPress** con integración de **tarjetas de crédito/débito** y **Sinpe Móvil**, permitiendo pagos rápidos y seguros. Incluye:

- **Procesamiento de pagos con tarjeta** utilizando APIs bancarias.
- **Validación de pagos con Sinpe Móvil** para transacciones nacionales.
- **Configuración de tasas diferenciadas y tasa 0** en convenio con bancos.
- **Panel de administración para monitoreo de transacciones.**

## 📂 Estructura del Proyecto
```
📁 WordPress_Payment_Gateway
│── 📂 src/
│   │── payment_gateway.php  # Plugin para integración de pagos en WordPress
│   │── sinpe_validation.php  # Validación de pagos con Sinpe Móvil
│   │── admin_dashboard.php  # Panel de control para administrar pagos
│── 📂 api/
│   │── process_payment.php  # API para procesamiento de pagos con tarjeta
│── 📂 tests/
│   │── test_payments.php  # Pruebas unitarias de pagos y validaciones
│── 📂 docs/
│   │── README.md  # Documentación del proyecto
```

## 🚀 Instalación y Configuración

1. **Clona este repositorio:**
   ```sh
   git clone https://github.com/emmacm20-lab/WordPress_Payment_Gateway.git
   ```
2. **Instala el plugin de pagos en WordPress:**
   ```sh
   wp plugin install src/payment_gateway.php
   ```
3. **Configura las credenciales del API de pago:**
   ```sh
   wp config set PAYMENT_API_KEY "tu_api_key"
   ```
4. **Habilita Sinpe Móvil como método de pago:**
   ```sh
   wp config set ENABLE_SINPE "true"
   ```

## 📩 Flujo de Trabajo
1. **Procesamiento de Pagos**: Se validan tarjetas de crédito y pagos Sinpe en la API bancaria.
2. **Validación de Sinpe Móvil**: Se recibe confirmación de la transacción mediante webhook.
3. **Administración de Transacciones**: Panel en WordPress para visualizar pagos y estados.
4. **Notificación Automática**: Se envían confirmaciones por correo a los clientes.

## 🛠 Tecnologías Utilizadas
- **WordPress & PHP**: Desarrollo del plugin de pagos.
- **APIs Bancarias**: Procesamiento de pagos con tarjeta y Sinpe Móvil.
- **WooCommerce**: Integración con tiendas en línea.
- **MySQL**: Almacenamiento de registros de transacciones.

## 📈 Resultados Esperados
- 📌 **Plataforma de pagos segura y rápida en WordPress.**
- 📌 **Facilidad de integración con bancos y Sinpe Móvil.**
- 📌 **Tasas diferenciadas y configuración de Tasa 0.**
- 📌 **Mayor conversión y eficiencia en pagos en línea.**

## 🧪 Pruebas
El proyecto incluye pruebas en PHP para validar pagos y transacciones.
1. **Ejecución de pruebas:**
   ```sh
   php tests/test_payments.php
   ```

## 📬 Contacto
Para consultas o sugerencias, contáctame en [emmanuel.cmora20@gmail.com](mailto:emmanuel.cmora20@gmail.com).