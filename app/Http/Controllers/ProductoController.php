<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de importar el modelo Producto si aún no lo has hecho

class ProductoController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    // Mostrar el formulario para crear un nuevo producto
    public function create()
    {
        return view('productos.create');
    }

    // Almacenar un nuevo producto
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            // Agrega más validaciones según tus necesidades
        ]);

        // Crea un nuevo producto en la base de datos
        Producto::create($request->all());

        // Redirige a la página de índice de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    // Mostrar el formulario para editar un producto
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // Actualizar el producto
    public function update(Request $request, Producto $producto)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            // Agrega más validaciones según tus necesidades
        ]);

        // Actualiza los datos del producto
        $producto->update($request->all());

        // Redirige a la página de índice de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    // Eliminar un producto
    public function destroy(Producto $producto)
    {
        $producto->delete();

        // Redirige a la página de índice de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}