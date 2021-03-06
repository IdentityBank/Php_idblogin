<?php
# * ********************************************************************* *
# *                                                                       *
# *   Login for IDB portals                                               *
# *   This file is part of idblogin. This project may be found at:        *
# *   https://github.com/IdentityBank/Php_idblogin.                       *
# *                                                                       *
# *   Copyright (C) 2020 by Identity Bank. All Rights Reserved.           *
# *   https://www.identitybank.eu - You belong to you                     *
# *                                                                       *
# *   This program is free software: you can redistribute it and/or       *
# *   modify it under the terms of the GNU Affero General Public          *
# *   License as published by the Free Software Foundation, either        *
# *   version 3 of the License, or (at your option) any later version.    *
# *                                                                       *
# *   This program is distributed in the hope that it will be useful,     *
# *   but WITHOUT ANY WARRANTY; without even the implied warranty of      *
# *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the        *
# *   GNU Affero General Public License for more details.                 *
# *                                                                       *
# *   You should have received a copy of the GNU Affero General Public    *
# *   License along with this program. If not, see                        *
# *   https://www.gnu.org/licenses/.                                      *
# *                                                                       *
# * ********************************************************************* *

################################################################################
# Namespace                                                                    #
################################################################################

namespace app\themes\bootstrap\assets;

################################################################################
# Use(s)                                                                       #
################################################################################

use yii\web\AssetBundle;

################################################################################
# Class(es)                                                                    #
################################################################################

class BootstrapAsset extends AssetBundle
{

    public $sourcePath = '@app/themes/bootstrap/views/assets';
    public $css =
        [
            'css/signin.css'
        ];
    public $depends =
        [
            'app\assets\AppAsset',
            'app\assets\LoginAsset',
        ];

    public function getAssetUrl()
    {
        return $this->baseUrl . '/';
    }
}

################################################################################
#                                End of file                                   #
################################################################################
