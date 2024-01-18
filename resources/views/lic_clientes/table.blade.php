<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="lic-clientes-table">
            <thead>
                <tr>
                    <th>Arazao</th>
                    <th>Anomefantasia</th>
                    <th>Acpfcnpj</th>
                    <th>Aendereco</th>
                    <th>Anumero</th>
                    <th>Acomplemento</th>
                    <th>Abairro</th>
                    <th>Ncep</th>
                    <th>Nidcidade</th>
                    <th>Acidadeext</th>
                    <th>Aufext</th>
                    <th>Atelefone1</th>
                    <th>Atelefone2</th>
                    <th>Aemail</th>
                    <th>Aemailfinanceiro</th>
                    <th>Aincricaoestadual</th>
                    <th>Aincricaomunicipal</th>
                    <th>Arg</th>
                    <th>Arntrc</th>
                    <th>Aresponsavel</th>
                    <th>Anomeparacontato</th>
                    <th>Afichatecnica</th>
                    <th>Nativoinativo</th>
                    <th>Aimagemprocuracao</th>
                    <th>Aimagemformulario</th>
                    <th>Aimagemcnh</th>
                    <th>Aimagemlogo</th>
                    <th>Aclientesrelacionados</th>
                    <th>Aarrayart</th>
                    <th>Aarraypedidoacesso</th>
                    <th>Acaracteristicacarreta</th>
                    <th>Nempresa</th>
                    <th>Aparticularidades</th>
                    <th>Nfatdiafaturar</th>
                    <th>Afatcpfcnpj</th>
                    <th>Ndiasaguardaboleto</th>
                    <th>Nenviaboleto</th>
                    <th>Nenvianfes</th>
                    <th>Nvisualizataxas</th>
                    <th>Nexibenoromaneio</th>
                    <th>Nexibenoromhonorarios</th>
                    <th>Nfatemitenota</th>
                    <th>Nfatgeranotaautomatica</th>
                    <th>Aestadostrafega</th>
                    <th>Acronoemailnotif</th>
                    <th>Ncronodiasantecnotifvenc</th>
                    <th>Nstatus</th>
                    <th>Nidloginincluiu</th>
                    <th>Ddataincluiu</th>
                    <th>Nidloginalterou</th>
                    <th>Ddataalterou</th>
                    <th>Nidloginexcluiu</th>
                    <th>Ddataexcluiu</th>
                    <th>Amotivoexcluiu</th>
                    <th>Aimagemcontrarrendamento</th>
                    <th>Nrenovaautomatico</th>
                    <th>Nenviaemaillicencavence</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($licClientes as $licCliente)
                <tr>
                    <td>{{ $licCliente->aRazao }}</td>
                    <td>{{ $licCliente->aNomeFantasia }}</td>
                    <td>{{ $licCliente->aCpfCnpj }}</td>
                    <td>{{ $licCliente->aEndereco }}</td>
                    <td>{{ $licCliente->aNumero }}</td>
                    <td>{{ $licCliente->aComplemento }}</td>
                    <td>{{ $licCliente->aBairro }}</td>
                    <td>{{ $licCliente->nCEP }}</td>
                    <td>{{ $licCliente->nIdCidade }}</td>
                    <td>{{ $licCliente->aCidadeExt }}</td>
                    <td>{{ $licCliente->aUFExt }}</td>
                    <td>{{ $licCliente->aTelefone1 }}</td>
                    <td>{{ $licCliente->aTelefone2 }}</td>
                    <td>{{ $licCliente->aEmail }}</td>
                    <td>{{ $licCliente->aEMailFinanceiro }}</td>
                    <td>{{ $licCliente->aIncricaoEstadual }}</td>
                    <td>{{ $licCliente->aIncricaoMunicipal }}</td>
                    <td>{{ $licCliente->aRg }}</td>
                    <td>{{ $licCliente->aRNTRC }}</td>
                    <td>{{ $licCliente->aResponsavel }}</td>
                    <td>{{ $licCliente->aNomeParaContato }}</td>
                    <td>{{ $licCliente->aFichaTecnica }}</td>
                    <td>{{ $licCliente->nAtivoInativo }}</td>
                    <td>{{ $licCliente->aImagemProcuracao }}</td>
                    <td>{{ $licCliente->aImagemFormulario }}</td>
                    <td>{{ $licCliente->aImagemCNH }}</td>
                    <td>{{ $licCliente->aImagemLogo }}</td>
                    <td>{{ $licCliente->aClientesRelacionados }}</td>
                    <td>{{ $licCliente->aArrayART }}</td>
                    <td>{{ $licCliente->aArrayPedidoAcesso }}</td>
                    <td>{{ $licCliente->aCaracteristicaCarreta }}</td>
                    <td>{{ $licCliente->nEmpresa }}</td>
                    <td>{{ $licCliente->aParticularidades }}</td>
                    <td>{{ $licCliente->nFatDiaFaturar }}</td>
                    <td>{{ $licCliente->aFatCpfCnpj }}</td>
                    <td>{{ $licCliente->nDiasAguardaBoleto }}</td>
                    <td>{{ $licCliente->nEnviaBoleto }}</td>
                    <td>{{ $licCliente->nEnviaNFEs }}</td>
                    <td>{{ $licCliente->nVisualizaTaxas }}</td>
                    <td>{{ $licCliente->nExibeNoRomaneio }}</td>
                    <td>{{ $licCliente->nExibeNoRomHonorarios }}</td>
                    <td>{{ $licCliente->nFatEmiteNota }}</td>
                    <td>{{ $licCliente->nFatGeraNotaAutomatica }}</td>
                    <td>{{ $licCliente->aEstadosTrafega }}</td>
                    <td>{{ $licCliente->aCronoEmailNotif }}</td>
                    <td>{{ $licCliente->nCronoDiasAntecNotifVenc }}</td>
                    <td>{{ $licCliente->nStatus }}</td>
                    <td>{{ $licCliente->nIdLoginIncluiu }}</td>
                    <td>{{ $licCliente->dDataIncluiu }}</td>
                    <td>{{ $licCliente->nIdLoginAlterou }}</td>
                    <td>{{ $licCliente->dDataAlterou }}</td>
                    <td>{{ $licCliente->nIdLoginExcluiu }}</td>
                    <td>{{ $licCliente->dDataExcluiu }}</td>
                    <td>{{ $licCliente->aMotivoExcluiu }}</td>
                    <td>{{ $licCliente->aImagemContrArrendamento }}</td>
                    <td>{{ $licCliente->nRenovaAutomatico }}</td>
                    <td>{{ $licCliente->nEnviaEmailLicencaVence }}</td>
                    <td style="width: 120px">
                        {!! Form::open(['route' => ['lic-clientes.destroy', $licCliente->ID], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('lic-clientes.show', [$licCliente->ID]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('lic-clientes.edit', [$licCliente->ID]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $licClientes])
        </div>
    </div>
</div>