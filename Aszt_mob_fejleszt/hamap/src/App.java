import java.util.HashMap;

public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Szótár");
        HashMap<String,String>országok=new HashMap<>();
        országok.put("Belgium", "Brüsszel");
        országok.put("Magyarország", "Budapest");
        országok.put("Dánia", "Koppenhága");
        országok.put("Vatikán", "VatikánVáros");
    System.out.println(országok.size());
    System.out.println(országok.get("Dánia"));
    }
}
