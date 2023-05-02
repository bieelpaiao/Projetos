<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Relatorio extends AbstractAction
{
    public function getTitle()
    {
        return 'Gerar Relatório';
    }

    public function getIcon()
    {
        return 'voyager-file-text';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-dark pull-right',
            'target' => '_blank',
        ];
    }

    public function getDefaultRoute()
    {
        return route('teste3', $this->data->{$this->data->getKeyName()});
    }
}
