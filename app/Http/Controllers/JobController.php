<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        // $jobs = Job::with('employer')->get(); 
        // Carrega os empregos com os empregadores relacionados, serve para não rodar várias queries no banco de dados

        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        //Resumo:
        // paginate(): tradicional, mostra total de páginas, mais pesado.
        // simplePaginate(): mais leve, só "próxima/anterior".
        // cursorPaginate(): mais performático para grandes tabelas, usa cursor, sem total de páginas.

        return view('jobs.index', [
            'jobs' => $jobs // Gera uma variável para a view chamada $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job,
        ]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            // Elemento requerido e no mínimo 3 caracteres
            // visitar https://laravel.com/docs/10.x/validation para mais validações
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1, // Temporário, depois vamos pegar do usuário logado
        ]);

        return redirect('/jobs'); // Mensagem de sucesso
    }
    public function edit(Job $job)
    {
        // se nao está logado, redireciona para login
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }
        return view('jobs.edit', [
            'job' => $job,
        ]);
    }
    public function update(Job $job)
    { // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // authorize (On hold...)

        // update the job
        // $job = Job::findOrFail($id);
        // find($id): retorna null se não encontrar.
        // findOrFail($id): lança exceção 404(not found) se não encontrar.

        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();
        // SAME THING AS:

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // redirect to the job page
        return redirect("/jobs/{$job->id}");
    }
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
