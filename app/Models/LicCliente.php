<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LicCliente extends Model
{
    public $table = 'LicCliente';

    public $fillable = [
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

    protected $casts = [
        'aRazao' => 'string',
        'aNomeFantasia' => 'string',
        'aCpfCnpj' => 'string',
        'aEndereco' => 'string',
        'aNumero' => 'string',
        'aComplemento' => 'string',
        'aBairro' => 'string',
        'aCidadeExt' => 'string',
        'aUFExt' => 'string',
        'aTelefone1' => 'string',
        'aTelefone2' => 'string',
        'aEmail' => 'string',
        'aEMailFinanceiro' => 'string',
        'aIncricaoEstadual' => 'string',
        'aIncricaoMunicipal' => 'string',
        'aRg' => 'string',
        'aRNTRC' => 'string',
        'aResponsavel' => 'string',
        'aNomeParaContato' => 'string',
        'aFichaTecnica' => 'string',
        'aImagemProcuracao' => 'string',
        'aImagemFormulario' => 'string',
        'aImagemCNH' => 'string',
        'aImagemLogo' => 'string',
        'aClientesRelacionados' => 'string',
        'aArrayART' => 'string',
        'aArrayPedidoAcesso' => 'string',
        'aCaracteristicaCarreta' => 'string',
        'aParticularidades' => 'string',
        'aFatCpfCnpj' => 'string',
        'aEstadosTrafega' => 'string',
        'aCronoEmailNotif' => 'string',
        'dDataIncluiu' => 'datetime',
        'dDataAlterou' => 'datetime',
        'dDataExcluiu' => 'datetime',
        'aMotivoExcluiu' => 'string',
        'aImagemContrArrendamento' => 'string'
    ];

    public static array $rules = [
        'aRazao' => 'required|string|max:120',
        'aNomeFantasia' => 'nullable|string|max:40',
        'aCpfCnpj' => 'required|string|max:20',
        'aEndereco' => 'nullable|string|max:60',
        'aNumero' => 'nullable|string|max:10',
        'aComplemento' => 'nullable|string|max:40',
        'aBairro' => 'nullable|string|max:40',
        'nCEP' => 'nullable',
        'nIdCidade' => 'nullable',
        'aCidadeExt' => 'nullable|string|max:40',
        'aUFExt' => 'nullable|string|max:2',
        'aTelefone1' => 'nullable|string|max:20',
        'aTelefone2' => 'nullable|string|max:20',
        'aEmail' => 'nullable|string|max:254',
        'aEMailFinanceiro' => 'nullable|string|max:254',
        'aIncricaoEstadual' => 'nullable|string|max:20',
        'aIncricaoMunicipal' => 'nullable|string|max:20',
        'aRg' => 'nullable|string|max:30',
        'aRNTRC' => 'nullable|string|max:20',
        'aResponsavel' => 'nullable|string|max:60',
        'aNomeParaContato' => 'nullable|string|max:60',
        'aFichaTecnica' => 'nullable|string|max:65535',
        'nAtivoInativo' => 'nullable',
        'aImagemProcuracao' => 'nullable|string|max:120',
        'aImagemFormulario' => 'nullable|string|max:120',
        'aImagemCNH' => 'nullable|string|max:120',
        'aImagemLogo' => 'nullable|string|max:120',
        'aClientesRelacionados' => 'nullable|string|max:65535',
        'aArrayART' => 'nullable|string|max:65535',
        'aArrayPedidoAcesso' => 'nullable|string|max:65535',
        'aCaracteristicaCarreta' => 'nullable|string|max:65535',
        'nEmpresa' => 'nullable',
        'aParticularidades' => 'nullable|string|max:65535',
        'nFatDiaFaturar' => 'nullable',
        'aFatCpfCnpj' => 'nullable|string|max:20',
        'nDiasAguardaBoleto' => 'nullable',
        'nEnviaBoleto' => 'nullable',
        'nEnviaNFEs' => 'nullable',
        'nVisualizaTaxas' => 'nullable',
        'nExibeNoRomaneio' => 'nullable',
        'nExibeNoRomHonorarios' => 'nullable',
        'nFatEmiteNota' => 'nullable',
        'nFatGeraNotaAutomatica' => 'nullable',
        'aEstadosTrafega' => 'nullable|string|max:65535',
        'aCronoEmailNotif' => 'nullable|string|max:120',
        'nCronoDiasAntecNotifVenc' => 'nullable',
        'nStatus' => 'nullable',
        'nIdLoginIncluiu' => 'nullable',
        'dDataIncluiu' => 'nullable',
        'nIdLoginAlterou' => 'nullable',
        'dDataAlterou' => 'nullable',
        'nIdLoginExcluiu' => 'nullable',
        'dDataExcluiu' => 'nullable',
        'aMotivoExcluiu' => 'nullable|string|max:65535',
        'aImagemContrArrendamento' => 'nullable|string|max:120',
        'nRenovaAutomatico' => 'nullable',
        'nEnviaEmailLicencaVence' => 'nullable'
    ];

    
}
