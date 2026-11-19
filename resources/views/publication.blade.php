@extends('layouts.app')

@section('title', 'Postar projeto - DevShare')
@section('body-class', 'publication-page')

@section('btn-sessao')
    <a href="{{ route('login') }}" class="btn btn-azul-claro rounded-pill bi bi-person-fill fs-6 text-decoration-none">
        Entrar
    </a>
@endsection

@section('conteudo')
    <main class="publication-main">
        <section class="profile-content" aria-label="Publicar projeto">
            <section class="project-card" aria-labelledby="publication-title">
                <header class="project-heading">
                    <i class="bi bi-rocket-takeoff-fill" aria-hidden="true"></i>
                    <div>
                        <h1 id="publication-title">Postar Projeto</h1>
                        <p>Compartilhe suas criações com a comunidade DevShare!</p>
                    </div>
                </header>

                <form action="{{ route('publish.post') }}" method="POST" enctype="multipart/form-data" class="project-fields">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger mb-0" role="alert">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div class="project-field">
                        <label for="project-title">Título do projeto <span>*</span></label>
                        <input id="project-title" name="title" type="text" value="{{ old('title') }}" placeholder="Ex: Meu Portfólio Web" maxlength="255" required>
                    </div>

                    <div class="project-field">
                        <label for="project-description">Descrição <span>*</span></label>
                        <textarea id="project-description" name="content" maxlength="1000" placeholder="Conte um pouco sobre seu projeto..." required>{{ old('content') }}</textarea>
                        <output class="project-counter" for="project-description">{{ strlen(old('content', '')) }}/1000</output>
                    </div>

                    <div class="project-details">
                        <div class="project-field">
                            <label for="project-image">Imagem de capa</label>
                            <input class="project-file-input" id="project-image" name="image" type="file" accept="image/png,image/jpeg,image/webp" required>
                            <label class="project-upload" for="project-image">
                                <i class="bi bi-cloud-arrow-up" aria-hidden="true"></i>
                                <strong>Arraste uma imagem aqui ou clique para selecionar</strong>
                                <small>PNG, JPG ou WEBP (máx. 5MB)</small>
                            </label>
                        </div>

                        <div class="project-options">
                            <div class="project-field">
                                <label for="project-category">Categoria <span>*</span></label>
                                <div class="project-input-icon">
                                    <i class="bi bi-code-slash" aria-hidden="true"></i>
                                    <select id="project-category" name="category" required>
                                        <option value="" selected disabled>Selecione uma categoria</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected(old('category') == $category->id)>
                                                {{ $category->name }}

                                                
                                            </option>
                                        @endforeach
                                    </select>
                                    <i class="bi bi-chevron-down project-select-arrow" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="project-field">
                                <label for="project-technologies">Tecnologias (opcional)</label>
                                <div class="project-tags">
                                    <div class="project-input-icon">
                                        <i class="bi bi-tag-fill" aria-hidden="true"></i>
                                        <input id="project-technologies" type="text" placeholder="Ex: React, Python, CSS...">
                                    </div>
                                    <button class="project-add-tag" type="button" aria-label="Adicionar tecnologia">+</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-submit-row">
                        <button class="project-publish-button" type="submit">
                            <i class="bi bi-send" aria-hidden="true"></i>
                            Publicar Projeto
                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </section>

            <aside class="publication-aside" aria-label="Dicas e anúncios">
                <section class="publication-tips">
                    <h2><i class="bi bi-lightbulb-fill" aria-hidden="true"></i>Dicas</h2>
                    <ul>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Use um título claro e atrativo.</span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Descreva bem seu projeto.</span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Adicione uma imagem de capa para deixá-lo ainda melhor!</span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Escolha a categoria correta.</span></li>
                    </ul>
                </section>

            </aside>
        </section>
    </main>
@endsection
