<?php

class ProjectConverter {
    public static function convertToStd($project){
        if(! is_array($project)) {
            $stdObject = new stdClass;
            $stdObject->id = $project->getId();
            $stdObject->title = $project->getTitle();
            $stdObject->field = $project->getField();
            $stdObject->url = $project->getUrl();
            $stdObject->description = $project->getDescription();
            $stdObject->image = $project->getImage();
            return $stdObject;
        } else {
            $stdObjectList = [];
            foreach($project as $newproject) {
                $stdObject = new stdClass;
                $stdObject->id = $newproject->getId();
                $stdObject->title = $newproject->getTitle();
                $stdObject->field = $newproject->getField();
                $stdObject->url = $newproject->getUrl();
                $stdObject->description = $newproject->getDescription();
                $stdObject->image = $newproject->getImage();
                $stdObjectList[] = $stdObject; 
            }
            return $stdObjectList;
        }
    }
}