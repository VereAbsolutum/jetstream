<?php

namespace App\Repositories;

use App\Models\LicCliente;
use App\Repositories\BaseRepository;

class LicClienteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'aRazao',
        'aNomeFantasia',
        'aCpfCnpj',
        'aEndereco',
        'aNumero',
        'aComplemento',
        'aBairro',
        'nCEP',
        'nIdCidade',
        'aCidadeExt',
        'aUFExt',
        'aTelefone1',
        'aTelefone2',
        'aEmail',
        'aEMailFinanceiro',
        'aIncricaoEstadual',
        'aIncricaoMunicipal',
        'aRg',
        'aRNTRC',
        'aResponsavel',
        'aNomeParaContato',
        'aFichaTecnica',
        'nAtivoInativo',
        'aImagemProcuracao',
        'aImagemFormulario',
        'aImagemCNH',
        'aImagemLogo',
        'aClientesRelacionados',
        'aArrayART',
        'aArrayPedidoAcesso',
        'aCaracteristicaCarreta',
        'nEmpresa',
        'aParticularidades',
        'nFatDiaFaturar',
        'aFatCpfCnpj',
        'nDiasAguardaBoleto',
        'nEnviaBoleto',
        'nEnviaNFEs',
        'nVisualizaTaxas',
        'nExibeNoRomaneio',
        'nExibeNoRomHonorarios',
        'nFatEmiteNota',
        'nFatGeraNotaAutomatica',
        'aEstadosTrafega',
        'aCronoEmailNotif',
        'nCronoDiasAntecNotifVenc',
        'nStatus',
        'nIdLoginIncluiu',
        'dDataIncluiu',
        'nIdLoginAlterou',
        'dDataAlterou',
        'nIdLoginExcluiu',
        'dDataExcluiu',
        'aMotivoExcluiu',
        'aImagemContrArrendamento',
        'nRenovaAutomatico',
        'nEnviaEmailLicencaVence'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return LicCliente::class;
    }
}
