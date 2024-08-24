<!-- resources/views/components/conteudo.blade.php -->
<div class="conteudo">
    <div class="card-deck">
        <h1>Licitações</h1>
        @forelse($licitations as $licitation)
            <div class="card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $licitation['titulo'] }}</h5>
                        <p class="card-text"><strong>Objeto:</strong> {{ $licitation['objeto'] }}</p>
                        <p class="card-text"><strong>Data de Abertura:</strong> {{ \Carbon\Carbon::parse($licitation['dataAbertura'])->format('d/m/Y H:i:s') }}</p>
                        <p class="card-text"><strong>Status:</strong> {{ $licitation['statusLicitacao'] }}</p>
                        <p class="card-text"><strong>Modalidade:</strong> {{ $licitation['modalidade'] }}</p>
                        <p class="card-text"><strong>Empresa:</strong> {{ $licitation['nmEmpresa'] }}</p>
                        <p class="card-text"><small class="text-muted">Data de Homologação: {{ \Carbon\Carbon::parse($licitation['dtHomologacao'])->format('d/m/Y H:i:s') }}</small></p>
                    </div>
                </div>
            </div>
        @empty
            <p>Nenhuma licitação disponível.</p>
        @endforelse
    </div>
</div>
