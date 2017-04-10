<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientsRequest;
use App\Models\Clients;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        if (!\Sentinel::getUser()->hasAccess('users')) {
//            \Log::error('Unauthorized access attempt',
//                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
//            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
//        }
        $clients = Clients::paginate(20);
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        //        if (!\Sentinel::getUser()->hasAccess('users')) {
//            \Log::error('Unauthorized access attempt',
//                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
//            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
//        }
        return view('clients.create');
    }

    public function store(ClientsRequest $request)
    {
        //        if (!\Sentinel::getUser()->hasAccess('users')) {
//            \Log::error('Unauthorized access attempt',
//                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
//            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
//        }
        $input = $request->all();

        if (Clients::where('idnum', $input['idnum'])) {
            \Log::info("This client {$input['idnum']} exists");
            return redirect()->back()->with('error', 'Este cliente ya esta registrado en el sistema');
        }

        if (!Clients::create($input)) {
            \Log::warning('Error on create client');
            return redirect()->back()->with('error', 'Hubo un error al intentar crear el registro');
        }

        return redirect()->route('clients.index')->with('success', 'Registro creado correctamente');
    }

    public function edit($id)
    {
        //        if (!\Sentinel::getUser()->hasAccess('users')) {
//            \Log::error('Unauthorized access attempt',
//                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
//            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
//        }
        if ($client = Clients::find($id)) {
            return view('clients.edit', compact('client'));
        }

        \Log::warning("Client id: {$id} not found");
        return redirect()->back()->with('error', 'Cliente no encontrado');
    }

    public function update(ClientsRequest $request, $id)
    {
        //        if (!\Sentinel::getUser()->hasAccess('users')) {
//            \Log::error('Unauthorized access attempt',
//                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
//            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
//        }
        $input = $request->except(['_method', '_token']);

        if (!$client = Clients::where('idnum', $input['idnum'])) {
            \Log::warning("This client {$input['idnum']} don't exists");
            return redirect()->back()->with('error', 'Este cliente no esta registrado en el sistema');
        }
        $client->update($input);

        return redirect()->route('clients.index')->with('success', 'Registro modificado correctamente');

    }

    public function destroy($id)
    {
        $message = '';
        $error = '';

        if (!\Sentinel::getUser()->hasAccess('clients.destroy')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            $message = 'No posee los permisos para realizar la operacion';
            $error = true;
        } else {
            if ($client = Clients::find($id)) {
                if (Clients::destroy($id) !== false) {
                    \Log::info('Client destroy.', $client->toArray());
                    $message = 'Usuario eliminado correctamente';
                    $error = false;
                } else {
                    \Log::warning("Error while trying to destroy user: {$id}");
                    $message = 'Error al intentar eliminar el usuario';
                    $error = true;
                }
            } else {
                \Log::warning("User {$id} not found");
                $message = 'Usuario no encontrado';
                $error = true;
            }
        }
        $response = [
            'error' => $error,
            'message' => $message
        ];
        \Log::debug('Sending response. ' . json_encode($response));
        return response()->json($response);
    }

    public function search($search)
    {
        \Log::info("New client search - JS");
        $client = \DB::table('clients')->selectRaw("description ||' - '|| id AS data")->where('description', 'ilike',
            '%' . $search . '%')->get();

        $arrayResponse = array();
        $i = 0;

        foreach ($client as $c) {
            $arrayResponse[$i] = $c->data;
            $i++;
        }

        return $arrayResponse;
    }
}
