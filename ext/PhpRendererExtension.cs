using System;
using System.Linq;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using Nebula.SDK.Plugin;

public class PhpRendererExtension : IRendererExtension
{
    public List<string> RenderClientImports()
    {
        return new List<string> {
            @"GuzzleHttp\Client",
            @"GuzzleHttp\Exception\GuzzleException",
        };
    }

    public List<string> RenderAbstractFunction(string url, string prefix, string returnType, string method, List<string> args)
    {
        var output = new List<string>();
        // output.Add($"var request = new RestRequest(\"{prefix}{url}\", Method.{method});");
        // output.AddRange(RenderUrlSegment(url, args));
        // output.Add($"var response = Client.Execute<{returnType}>(request);");
        // output.Add("return response.Data;");

        return output;
    }
}