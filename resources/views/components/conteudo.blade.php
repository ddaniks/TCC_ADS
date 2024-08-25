<!-- resources/views/components/conteudo.blade.php -->
<div class="conteudo">
    <div class="card-deck">
        <h1>Licitações</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="conteudo">
            <h2>Importar CSV</h2>
            <form action="{{ route('importCSV') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="csvFile">Escolha um arquivo CSV:</label>
                    <input type="file" name="csvFile" id="csvFile" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Importar</button>
            </form>
        </div>
        
        
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

        <div class="conteudo">
            <div class="card-deck">
                <h1>Requisitos</h1>
                <form action="{{ route('uploadFiles') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <!-- Exemplo de checkbox de requisitos -->
                        <label><input type="checkbox" name="requisitos[]" value="requisito1"> Requisito 1</label>
                        <input type="file" name="arquivos[]"><br>
                        <label><input type="checkbox" name="requisitos[]" value="requisito2"> Requisito 2</label>
                        <input type="file" name="arquivos[]"><br>
                        <label><input type="checkbox" name="requisitos[]" value="requisito3"> Requisito 3</label>
                        <input type="file" name="arquivos[]"><br>
                    </div>
                
                    {{-- <div>
                        <!-- Input para upload de arquivos -->
                        <input type="file" name="arquivos[]">
                        <input type="file" name="arquivos[]">
                        <input type="file" name="arquivos[]">
                    </div> --}}
                
                    <button type="submit">Enviar</button>
                </form>
                
            </div>
        </div>
        
        <script>
            function toggleFileInput(index) {
                var fileInput = document.getElementById('file-upload-' + index);
                if (document.getElementById('requisito-' + index).checked) {
                    fileInput.style.display = 'block';
                } else {
                    fileInput.style.display = 'none';
                }
            }
        </script>
        
    </div>
</div>
