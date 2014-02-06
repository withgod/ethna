<?php
/*
 * Copyright (C) the Ethna contributors. All rights reserved.
 *
 * This file is part of the Ethna package, distributed under new BSD.
 * For full terms see the included LICENSE file.
 */


class Ethna_MocktestManager extends Ethna_AppManager
{
    //  何も定義しない
}

class Ethna_Mocktest extends Ethna_AppObject
{
    public function getName($key)
    {
        return $this->get($key);
    }
}

