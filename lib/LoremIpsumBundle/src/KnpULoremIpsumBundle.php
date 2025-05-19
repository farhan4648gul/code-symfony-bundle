<?php 

namespace KnpU\LoremIpsumBundle; 

use Symfony\Component\HttpKernel\Bundle\Bundle; 

class KnpULoremIpsumBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new DependencyInjection\KnpULoremIpsumExtension();
        }

        return $this->extension;
    }
     
} 