local key = _G.Key
local check = "https://raw.githubusercontent.com/xZpmkill802/Bluelock/refs/heads/main/Check.php?key=" .. key
if game:HttpGet(check) == "Whitelisted" then
loadstring(game:HttpGet("https://raw.githubusercontent.com/xZpmkill802/Bluelock/refs/heads/main/Script.lua"))()
else
game.Players.LocalPlayer:Kick("ไปซื้อ Key ไป : Back to buy Key here")
end
