<?php
namespace MemMemov\UnitRobot\Source;

class File
{
    private const NAMESPACE_PATTERN = '/\s+namespace\s+(\S+)(\s|;)+/U';
    private const CLASS_PATTERN = '/\s+class\s+(\S+)\s/U';
    
    private $rootPath;
    private $path;
    private $name;
    private $content;
    
    public function __construct(
        string $rootPath, 
        string $path, 
        string $name,
        string $content
    ) {
        $this->rootPath = $rootPath;
        $this->path = $path;
        $this->name = $name;
        $this->content = $content;
    }
    
    public function hasClass(): bool
    {
        $hasNamespace = 1 === preg_match(self::NAMESPACE_PATTERN, $this->content);
        $hasClassName = 1 === preg_match(self::CLASS_PATTERN, $this->content);
        
        $hasClass = $hasNamespace && $hasClassName;
        
        return $hasClass;
    }
    
    public function getClassName(): string
    {
        preg_match(self::NAMESPACE_PATTERN, $this->content, $namespaceMatches);
        
        $namespace = $namespaceMatches[1];
        
        preg_match(self::CLASS_PATTERN, $this->content, $classMatches);
        
        $class = $classMatches[1];

        return '\\' . $namespace . '\\' . $class;
    }
}