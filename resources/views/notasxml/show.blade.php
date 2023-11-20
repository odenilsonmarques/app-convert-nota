@extends('layouts.template')
@section('title', 'dados da notas')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">


                <div class="table-responsive table-notas">
                    <table class="table table table-hover caption-top">
                        <caption>Detalhes da Nota</caption>
                        <thead class="table header-table">
                            <tr>
                                <th>Informação</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>ID</strong></td>
                                <td>{{ $xml->NFe->infNFe->ide->cNF }}</td>
                            </tr>
                            <tr>
                                <td><strong>Natureza da Operação</strong></td>
                                <td>{{ $xml->NFe->infNFe->ide->natOp }}</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário para outras informações -->

                            <!-- Emitente -->
                            <tr>
                                <td><strong>Emitente</strong></td>
                                <td>{{ $xml->NFe->infNFe->emit->xNome }}</td>
                            </tr>
                            <tr>
                                <td><strong>CNPJ Emitente</strong></td>
                                <td>{{ $xml->NFe->infNFe->emit->CNPJ }}</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário para outras informações do emitente -->

                            <!-- Destinatário -->
                            <tr>
                                <td><strong>Destinatário</strong></td>
                                <td>{{ $xml->NFe->infNFe->dest->xNome }}</td>
                            </tr>
                            <tr>
                                <td><strong>CPF Destinatário</strong></td>
                                <td>{{ $xml->NFe->infNFe->dest->CPF }}</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário para outras informações do destinatário -->

                            <!-- Detalhes do Produto -->
                            @foreach ($xml->NFe->infNFe->det as $detalhe)
                                <tr>
                                    <td><strong>Produto</strong></td>
                                    <td>{{ $detalhe->prod->xProd }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Quantidade</strong></td>
                                    <td>{{ $detalhe->prod->qCom }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Valor Unitário</strong></td>
                                    <td>{{ $detalhe->prod->vUnCom }}</td>
                                </tr>
                                <!-- Adicione mais linhas conforme necessário para outras informações do produto -->
                            @endforeach

                            <!-- Informações Adicionais -->
                            <tr>
                                <td><strong>Observações Fisco</strong></td>
                                <td>{{ $xml->NFe->infNFe->infAdic->infAdFisco }}</td>
                            </tr>
                            <tr>
                                <td><strong>Informações Complementares</strong></td>
                                <td>{{ $xml->NFe->infNFe->infAdic->infCpl }}</td>
                            </tr>
                            <!-- Adicione mais linhas conforme necessário para outras informações adicionais -->
                        </tbody>



                    </table>

                </div>



            </div>
        </div>
    </div>

@endSection



<!-- resources/views/notasxml/show.blade.php -->

{{-- @extends('layouts.app') --}}
