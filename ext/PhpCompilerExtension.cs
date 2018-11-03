using System;
using System.Linq;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using Nebula.SDK.Plugin;
using Nebula.SDK.Compiler.Objects;
using Nebula.SDK.Objects;

public class PhpCompilerExtension : ICompilerExtension
{
    public List<RootObject> GetTopOfClassExtra(ApiConfig config)
    {
        return new List<RootObject>();
    }

    public List<GenericProperty> GetProperties()
    {
        return new List<GenericProperty>();
    }

    public GenericConstructor GetConstructor(string className, ApiConfig config)
    {
        var args = new List<GenericVariableDefinition>();
        var body = new List<string>();
        
        return new GenericConstructor
        {
            Arguments = args,
            Name = $"{className}Client",
            Body = body
        };
    }
}