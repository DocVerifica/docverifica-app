<?php

namespace App\Enums;

enum DocumentType: string
{
    case SEM_FILTRO = 'Escolha uma opção';
/*    case NOME_COMPLETO = 'Nome Completo';
    case NOME_EMPRESA = 'Nome da Empresa';
    case NUMERO_BENEFICIARIO = 'Nº de beneficiário';
    case PIS = 'PIS - (Cadastro Social)';
    case CPF = 'CPF (Cadastro de Pessoa Física)';*/
    case CNPJ = 'CNPJ (Cadastro Nacional de Pessoa Jurídica)';
    case CPF = 'CPF';
}
