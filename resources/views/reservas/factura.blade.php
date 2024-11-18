<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura de Reserva - #{{ substr($reserva->codigo_pedido, 0, 10) }}</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            font-size: 14px; /* Tamaño de fuente más pequeño para el cuerpo */
        }

        /* Estilos para el encabezado */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 28px; /* Tamaño de fuente reducido para el encabezado */
            color: #2d3748;
            margin-bottom: 5px;
        }
        .header img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }

        /* Estilos para la tabla de la factura */
        .invoice-details {
            width: 100%;
            margin-bottom: 15px;
            border-collapse: collapse;
        }
        .invoice-details td, .invoice-details th {
            padding: 5px 8px; /* Reduce el padding */
            border: 1px solid #ccc;
            text-align: left;
            font-size: 13px; /* Tamaño de fuente más pequeño para la tabla */
        }
        .invoice-details th {
            background-color: #f7fafc;
            font-weight: bold;
        }

        .invoice-details td {
            background-color: #f9fafb;
        }

        /* Estilo para las secciones */
        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #4a5568;
        }

        /* Estilo para el pie de página */
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px; /* Tamaño de fuente más pequeño para el pie de página */
            color: #6b7280;
        }

        .footer p {
            margin: 0;
        }

        .footer a {
            color: #3182ce;
            text-decoration: none;
        }

        .footer .social-icons a {
            margin: 0 5px;
            font-size: 14px; /* Tamaño de los iconos más pequeño */
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Factura de Reserva</h1>
        <p>SecureStay Hotel</p>
    </div>

    <div class="section-title">Detalles de la Reserva</div>
    <table class="invoice-details">
        <tr>
            <th>Orden</th>
            <th>Correo</th>
            <th>Cuarto</th>
            <th>Llegada</th>
            <th>Salida</th>
            <th>Precio Total</th>
        </tr>
        <tr>
            <td>{{ substr($reserva->codigo_pedido, 0, 10) }}</td>
            <td>{{ $reserva->email }}</td>
            <td>{{ $reserva->cuarto }}</td>
            <td>{{ $reserva->fecha_llegada }}</td>
            <td>{{ $reserva->fecha_salida }}</td>
            <td>${{ number_format($reserva->precio, 2) }}</td>
        </tr>
    </table>

    <div class="section-title">Detalles de Contacto</div>
    <table class="invoice-details">
        <tr>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Av. Principal 123, Saltillo, México</td>
            <td>+52 844-529-1303</td>
            <td>info@securestay.com</td>
        </tr>
    </table>

    <div class="footer">
        <p>&copy; 2024 SecureStay. Todos los derechos reservados.</p>
        <p>Visítanos en <a href="https://securestay.com" target="_blank">securestay.com</a></p>
        <div class="social-icons">
            <a href="https://facebook.com/securestay" target="_blank">Facebook</a>
            <a href="https://instagram.com/securestay" target="_blank">Instagram</a>
            <a href="https://twitter.com/securestay" target="_blank">Twitter</a>
        </div>
    </div>

</body>
</html>
