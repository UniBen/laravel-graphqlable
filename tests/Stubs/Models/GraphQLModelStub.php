<?php

namespace UniBen\LaravelGraphqlable\Tests\Stubs\Models;

use UniBen\LaravelGraphQLable\Traits\GraphQLQueryableTrait;

class GraphQLModelStub
{
    use GraphQLQueryableTrait;
    
    protected $table = 'test_graohql';
    
    public static function graphQLQueryable(): array
    {
        return [
            'title',
            'first_name',
            'last_name',
            'bio',
        ];
    }
    
    public static function graphQLRelations(): array
    {
        return [
            'image'
        ];
    }
    
    public static function graphQLMutatable(): array
    {
        return [
            'publicTestMethod',
            'protectedTestMethod',
            'privateTestMethod'
        ];
    }
    
    public static function graphQLName(): string
    {
        return 'GraphQLModel';
    }
    
    public static function graphQLDescription(): string
    {
        return 'Non-autogenerated description for GraphQLModelStub';
    }
    
    public function testMethod() {
        return true;
    }
}