using System;
using System.Linq;
using System.Collections.Generic;
using Core.Plugin;
using Nebula.Compiler.Objects;
using Nebula.Compiler.Abstracts;
using Nebula.Models;
using System.Text.RegularExpressions;


public class PhpCompilerPlugin : ICompilerPlugin
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