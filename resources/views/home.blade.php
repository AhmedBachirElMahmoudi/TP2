@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Gestion des Employés Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            Gestion des Employés
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Liste des Employés</h5>
                            <a href="{{ route('employees.index') }}" class="btn btn-primary">Voir la Liste</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ajouter un Employé</h5>
                            <a href="{{ route('employee.create') }}" class="btn btn-success">Ajouter un Employé</a>
                        </div>
                    </div>
                    <!-- End Gestion des Employés Card -->

                    <!-- Gestion des Projets Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            Gestion des Projets
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Liste des Projets</h5>
                            <a href="{{ route('projects.index') }}" class="btn btn-primary">Voir la Liste</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ajouter un Projet</h5>
                            <a href="{{ route('project.create') }}" class="btn btn-success">Ajouter un Projet</a>
                        </div>
                    </div>
                    <!-- End Gestion des Projets Card -->

                    <!-- Gestion des Tâches Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            Gestion des Tâches
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Liste des Tâches</h5>
                            <a href="{{ route('taches.index') }}" class="btn btn-primary">Voir la Liste</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ajouter une Tâche</h5>
                            <a href="{{ route('tache.create') }}" class="btn btn-success">Ajouter une Tâche</a>
                        </div>
                    </div>
                    <!-- End Gestion des Tâches Card -->

                    <!-- Additional Cards for other categories can be added similarly -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
