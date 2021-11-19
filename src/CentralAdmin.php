<?php
namespace ScenicItSolutions\CentralAdmin;

use ScenicItSolutions\CentralAdmin\Traits\HasAssets;

class CentralAdmin
{
    use HasAssets;


    /**
     * @var Navbar
     */
    protected $navbar;
    
    /**
     * Get navbar object.
     *
     * @return \Encore\Admin\Widgets\Navbar
     */
    public function getNavbar()
    {
        if (is_null($this->navbar)) {
            $this->navbar = 'left';
        }

        return $this->navbar;
    }
}
