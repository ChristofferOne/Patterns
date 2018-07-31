<?php
/**
 * Created by PhpStorm.
 * User: christofferlundberg
 * Date: 2018-04-23
 * Time: 20:40
 */

namespace Patterns\CompositePattern\Music;

use Assets\SingletonOutputBuffer;

class SongGroup extends SongComponent {
    private $songComponents = [];

    private $groupName;
    private $groupDescription;

    public function __construct(String $groupName, String $groupDescription) {
        $this->groupName = $groupName;
        $this->groupDescription = $groupDescription;
    }

    public function getGroupName() : String {
        return $this->groupName;
    }

    public function getGroupDescription() : String {
        return $this->groupDescription;
    }

    public function add(SongComponent $component) {
        $this->songComponents[] = $component;
    }

    public function remove(SongComponent $component) {
        unset($component, $this->songComponents);
    }

    public function getComponent(Int $index) : SongComponent {
        return $this->songComponents[$index];
    }

    public function displaySongInfo() {
        echo $this->getGroupName().$this->getGroupDescription();
        SingletonOutputBuffer::getInstance()->write($this->getGroupName().$this->getGroupDescription());

        foreach ($this->songComponents as $songComponent) {
            $songComponent->displaySongInfo();
        }
    }
}