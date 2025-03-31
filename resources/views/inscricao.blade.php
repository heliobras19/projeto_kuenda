<x-app>
    @slot('body')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .alert {
            background-color: #d9edf7;
            color: #31708f;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .logo {
            text-align: center;
        }
        .logo img {
            width: 150px;
        }
        .tabs {
            display: flex;
            margin-top: 20px;
        }
        .tab {
            flex: 1;
            padding: 10px;
            text-align: center;
            background: #ccc;
            cursor: pointer;
        }
        .tab.active {
            background: #900;
            color: white;
        }
        
        .unactive:hover {
            background: rgba(153, 0, 0, 0.795);
            color: white;
        }
        .documents {
            margin-top: 20px;
        }
        .document-item {
            background: #fff;
            border: 1px solid #900;
            padding: 10px;
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .download-icon {
            color: #900;
            font-size: 20px;
            cursor: pointer;
        }

        .tab-content {
                display: none; /* Esconde todas as abas por padrão */
                padding: 15px;
                border: 1px solid #900;
                margin-top: 10px;
                border-radius: 5px;
                background: white;
            }

            .tab-content.active {
                display: block; /* Mostra apenas a aba ativa */
            }

.cargo-container {
    font-family: Arial, sans-serif;
    padding: 10px 0;
    width: 100%;
}

.cargo-info {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    color: #0056b3;
}

.cargo-info a {
    text-decoration: none;
    color: #0056b3;
    font-weight: bold;
}

.cargo-nome {
    font-size: 18px;
    font-weight: bold;
    margin: 5px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cargo-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.preco {
    font-size: 16px;
    font-weight: bold;
}

.btn-candidatar {
    background-color: #900;
    color: white;
    border: none;
    padding: 8px 12px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s;
}

.btn-candidatar:hover {
    background-color: #700;
}

.linha {
    width: 100%;
    height: 2px;
    background-color: #900;
    margin-top: 5px;
}

    </style>
        <div class="container">
            <div class="alert">
                {{$cargo_inscricao->concurso->descricao}}  
            </div>
            <div class="logo">
                <img src="{{asset('storage/'.$cargo_inscricao->concurso->cliente->logo)}}" alt="logo">
            </div>
            
            
            <div id="documents" class="tab-content active">
                
            </div>
            
            <div id="cargos" class="tab-content active">
                <form action="">
                    <input type="hidden" step="{{$step}}">
                    <input type="email" class="form-control col-md-6" placeholder="email" />
                    <button actio class="btn-candidatar">Candidatar-se</button>
                </form>
            </div>


        </div>

        <script>
    function showTab(tabId) {
            // Esconder todos os conteúdos
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });

            // Remover a classe 'active' das abas
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });

            // Mostrar o conteúdo correto e ativar a aba correspondente
            document.getElementById(tabId).classList.add('active');
            event.target.classList.add('active');
        }
        </script>
        @endslot
</x-app>