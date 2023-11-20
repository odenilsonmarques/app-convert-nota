@extends('layouts.template')

@section('title', 'dados da notas')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h1>Detalhes da Nota Fiscal</h1>

                <table>
                    <tr>
                        <th>Informação</th>
                        <th>Valor</th>
                    </tr>

                    <tr>
                        <td>ID</td>
                        <td>{{ $xml->NFe->infNFe->ide->cNF }}</td>
                    </tr>
                    <tr>
                        <td>Natureza da Operação</td>
                        <td>{{ $xml->NFe->infNFe->ide->natOp }}</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário para outras informações -->

                    <!-- Emitente -->
                    <tr>
                        <td>Emitente</td>
                        <td>{{ $xml->NFe->infNFe->emit->xNome }}</td>
                    </tr>
                    <tr>
                        <td>CNPJ Emitente</td>
                        <td>{{ $xml->NFe->infNFe->emit->CNPJ }}</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário para outras informações do emitente -->

                    <!-- Destinatário -->
                    <tr>
                        <td>Destinatário</td>
                        <td>{{ $xml->NFe->infNFe->dest->xNome }}</td>
                    </tr>
                    <tr>
                        <td>CPF Destinatário</td>
                        <td>{{ $xml->NFe->infNFe->dest->CPF }}</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário para outras informações do destinatário -->

                    <!-- Detalhes do Produto -->
                    @foreach ($xml->NFe->infNFe->det as $detalhe)
                        <tr>
                            <td>Produto</td>
                            <td>{{ $detalhe->prod->xProd }}</td>
                        </tr>
                        <tr>
                            <td>Quantidade</td>
                            <td>{{ $detalhe->prod->qCom }}</td>
                        </tr>
                        <tr>
                            <td>Valor Unitário</td>
                            <td>{{ $detalhe->prod->vUnCom }}</td>
                        </tr>
                        <!-- Adicione mais linhas conforme necessário para outras informações do produto -->
                    @endforeach

                    <!-- Informações Adicionais -->
                    <tr>
                        <td>Observações Fisco</td>
                        <td>{{ $xml->NFe->infNFe->infAdic->infAdFisco }}</td>
                    </tr>
                    <tr>
                        <td>Informações Complementares</td>
                        <td>{{ $xml->NFe->infNFe->infAdic->infCpl }}</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário para outras informações adicionais -->

                </table>


            </div>
        </div>
    </div>

@endSection



<!-- resources/views/notasxml/show.blade.php -->

{{-- @extends('layouts.app') --}}
