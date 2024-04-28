<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class QRCodeController extends Controller
{
    public function generateQR(Request $request)
    {
        // Obtener los datos del formulario
        $data = $request->all();

        // Log de los datos recibidos
        Log::info("Datos recibidos para generar el código QR: " . json_encode($data));

        // Verificar si los datos requeridos están presentes
        if (!isset($data['id']) || !isset($data['codigo_bien'])) {
            Log::error('Los datos requeridos no están presentes en la solicitud');
            return response()->json(['error' => 'Los datos requeridos no están presentes en la solicitud'], 400);
        }

        // Concatenar los datos en una cadena para el contenido del código QR
        $contenidoQR = "ID: {$data['id']}, Código Bien: {$data['codigo_bien']}";

        // Instanciar el renderizador de imagen con Imagick
        $renderer = new ImageRenderer(
            new RendererStyle(300), // Reducir el tamaño a 300
            new ImagickImageBackEnd()
        );

        // Instanciar el escritor
        $writer = new Writer($renderer);

        try {
            // Generar el código QR en memoria
            $qrCodeData = $writer->writeString($contenidoQR);

            // Generar un nombre único para el archivo JPEG
            $fileName = 'qr_code_' . $data['codigo_bien'] . '.jpg';

            // Guardar el código QR en el almacenamiento de Laravel
            Storage::disk('public')->put('Qrcodes/' . $fileName, $qrCodeData);


            // Obtener la URL de la imagen del código QR
            $qrCodeUrl = asset('Qrcodes/' . $fileName);

            // Devolver la URL del código QR en la respuesta
            return response()->json(['qr_code_url' => $qrCodeUrl], 200);
        } catch (\Exception $e) {
            // Log del error
            Log::error("Error al generar el código QR: {$e->getMessage()}");
            return response()->json(['error' => 'No se pudo generar el código QR'], 500);
        }
    }
}
